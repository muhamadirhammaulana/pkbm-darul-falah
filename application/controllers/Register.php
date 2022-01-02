<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_register');
        $this->load->model('m_home');
        $this->load->model('m_profil');
        
    }
    
    public function index()
    {
        $this->form_validation->set_rules('nama_userreg', 'Nama Program', 'required');
        $this->form_validation->set_rules('usernamereg', 'Username', 'required');
        $this->form_validation->set_rules('passwordreg', 'Password', 'required');
        $this->form_validation->set_rules('levelreg', 'Level', 'required');

        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './assets/foto_user/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_program')) {

                $data = array(
                    'profil' => $this->m_profil->detail(),
                    'medsos' => $this->m_home->medsos(),
                    'error' => $this->upload->display_errors(),
                );
                $this->load->view('page-login', $data, FALSE);
                
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/foto_program/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_user' => $this->input->post('nama_userreg'),
                    'username' => $this->input->post('usernamereg'),
                    'password' => password_hash($this->input->post('passwordreg'), PASSWORD_DEFAULT),
                    'level' => $this->input->post('levelreg'),
                    'foto_user' => $upload_data['uploads']['file_name']
                );

                if($this->m_register->check_user_exist($data['username'])) {
                    $this->session->set_flashdata('register_gagal', 'Username sudah ada !');

                } else {
                    $this->m_register->save($data);
                    $this->session->set_flashdata('register_sukses', 'Akun berhasil Didaftarkan !');
                
                    redirect('login');
                }
            }

            $data = array(
                'nama_user' => $this->input->post('nama_userreg'),
                'username' => $this->input->post('usernamereg'),
                'password' => password_hash($this->input->post('passwordreg'), PASSWORD_DEFAULT),
                'level' => $this->input->post('levelreg')
            );

            if($this->m_register->check_user_exist($data['username'])) {
                $this->session->set_flashdata('register_gagal', 'Username sudah ada !');

            } else {
                $this->m_register->save($data);
                $this->session->set_flashdata('register_sukses', 'Akun berhasil Didaftarkan !');
            
                redirect('login');
            }
        }

        $data = array(
            'profil' => $this->m_profil->detail(),
            'medsos' => $this->m_home->medsos(),
        );
        $this->load->view('page-login', $data, FALSE);
    }
}

/* End of file Register.php */
