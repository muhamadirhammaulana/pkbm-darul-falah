<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->model('m_akreditasi');
        $this->load->model('m_visimisi');
        $this->load->model('m_profil');
        $this->load->model('m_struktur');
        $this->load->model('m_pembelajaran');
        $this->load->model('m_galeri');
        $this->load->model('m_berita');
        $this->load->model('m_legalitas');
        $this->load->model('m_user');
        $this->load->model('m_dashboard');
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'jml_program' =>$this->m_dashboard->jumlah_program(),
            'jml_galeri' =>$this->m_dashboard->jumlah_galeri(),
            'jml_berita' =>$this->m_dashboard->jumlah_berita(),
            'isi' => 'admin/v_home'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    /* User */

    public function user($id_user)
    {
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'isi' => 'admin/v_user',
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function update_user($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'id_user' => $id_user,
                'nama_user' => $this->input->post('nama_user'),
                'username' => $this->input->post('username'),
            );
            $this->m_user->save($data);
            $this->session->set_flashdata('pesan', 'Akun berhasil diupdate !');
            
            redirect('admin/user/'.$id_user);
        }
    }

    public function change_password($id_user)
    {
        $this->form_validation->set_rules('password_baru', 'Password', 'required');
        $this->form_validation->set_rules('konfirmasi_password_baru', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {

            $new_password=$this->input->post('password_baru');
            $confirm_password=$this->input->post('konfirmasi_password_baru');

            if($new_password != $confirm_password) {
                $this->session->set_flashdata('password_gagal', 'Password tidak cocok !');
                

            } else {
                $data = array(
                    'id_user' => $id_user,
                    'password' => password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT),
                );
                $this->m_user->save($data);
                $this->session->set_flashdata('pesan', 'Password berhasil diupdate !');
                
                redirect('admin/user/'.$id_user);
            }
        }
    }

    public function foto_profil($id_user)
    {
        $config['upload_path'] = './assets/image/foto_user/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2000;
        $this->upload->initialize($config);
        
        if (!$this->upload->do_upload('foto_user')) {
            $data = array(
                'user' => $this->m_user->detail($id_user),
                'profil' => $this->m_profil->detail(),
                'error' => $this->upload->display_errors(),
                'isi' => 'admin/v_user'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/foto_user/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            // Menghapus file foto lama
            $user=$this->m_user->detail($id_user);
            if ($user->foto_user != "") {
                unlink('./assets/image/foto_user/'.$user->foto_user);
            }
            // End menghapus file foto lama

            $data = array(
                'id_user' => $id_user,
                'foto_user' => $upload_data['uploads']['file_name']
            );
            $this->m_user->save($data);
            $this->session->set_flashdata('pesan', 'Foto berhasil Diupdate !');
            
            redirect('admin/user/'.$id_user);
            
        }
    }

    /* End User */

    /* Data Admin */

    public function data_admin()
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'data_admin' => $this->m_admin->lists(),
            'isi' => 'admin/admin/v_dataadmin'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function add_admin()
    {
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/foto_user/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_user')) {
                $id_user = $this->session->userdata('id_user');
                $data = array(
                    'user' => $this->m_user->detail($id_user),
                    'profil' => $this->m_profil->detail(),
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/admin/v_addadmin'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                
            }
            else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/foto_user/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $new_password=$this->input->post('password');
                $confirm_password=$this->input->post('konfirmasi_password');

                $data = array(
                    'nama_user' => $this->input->post('nama_user'),
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'level' => '1',
                    'foto_user' => $upload_data['uploads']['file_name']
                );

                if($this->m_admin->check_user_exist($data['username'])) {
                    $this->session->set_flashdata('register_gagal', 'Username sudah ada !');
                    redirect('admin/data-admin/tambah-admin');
                } else {
                    if($new_password != $confirm_password) {
                        $this->session->set_flashdata('password_gagal', 'Password tidak cocok !');
                        redirect('admin/data-admin/tambah-admin');
                    } else {
                        $this->m_admin->add($data);
                        $this->session->set_flashdata('pesan', 'Akun berhasil Ditambahkan !');
                        redirect('admin/data-admin');
                    }
                }
            }

            $new_password=$this->input->post('password');
            $confirm_password=$this->input->post('konfirmasi_password');
            
            $data = array(
                'nama_user' => $this->input->post('nama_user'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'level' => '1'
            );

            if($this->m_admin->check_user_exist($data['username'])) {
                $this->session->set_flashdata('register_gagal', 'Username sudah ada !');
                redirect('admin/data-admin/tambah-admin');
            } else {
                if($new_password != $confirm_password) {
                    $this->session->set_flashdata('password_gagal', 'Password tidak cocok !');
                    redirect('admin/data-admin/tambah-admin');
                } else {
                    $this->m_admin->add($data);
                    $this->session->set_flashdata('pesan', 'Akun berhasil Ditambahkan !');
                    redirect('admin/data-admin');
                }
            }
        }

        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'isi' => 'admin/admin/v_addadmin'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function edit_admin($id_user)
    {
        $this->form_validation->set_rules('nama_user', 'Nama User', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/foto_user/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
            
            if (!$this->upload->do_upload('foto_user')) {
                $data = array(
                    'user' => $this->m_user->detail($id_user),
                    'profil' => $this->m_profil->detail(),
                    'error' => $this->upload->display_errors(),
                    'admin' => $this->m_admin->detail($id_user),
                    'isi' => 'admin/admin/v_editadmin'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE); 
            }
            else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/foto_user/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Menghapus file foto lama
                $user=$this->m_admin->detail($id_user);
                if ($user->foto_user != "") {
                    unlink('./assets/image/foto_user/'.$program->foto_user);
                }
                // End menghapus file foto lama

                $username=$this->input->post('username');
                $new_password=$this->input->post('password');
                $confirm_password=$this->input->post('konfirmasi_password');
                $admin=$this->m_admin->detail($id_user);
                $curr_username=$admin->username;

                if($curr_username != $username) {
                    if ($this->m_admin->check_user_exist($username)) {
                        $this->session->set_flashdata('register_gagal', 'Username sudah ada !');
                        redirect('admin/data-admin/edit-admin/'.$id_user);
                    } else {
                        if ($new_password == "" && $confirm_password == "") {
                            $data = array(
                                'id_user' => $id_user,
                                'nama_user' => $this->input->post('nama_user'),
                                'username' => $this->input->post('username'),
                                'level' => '1',
                                'foto_user' => $upload_data['uploads']['file_name']
                            );
                            $this->m_admin->edit($data);
                            $this->session->set_flashdata('pesan', 'Akun berhasil diedit !');
                            redirect('admin/data-admin');
                        } else {
                            $data = array(
                                'id_user' => $id_user,
                                'nama_user' => $this->input->post('nama_user'),
                                'username' => $this->input->post('username'),
                                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                                'level' => '1',
                                'foto_user' => $upload_data['uploads']['file_name']
                            );
                            if($new_password != $confirm_password) {
                                $this->session->set_flashdata('password_gagal', 'Password tidak cocok !');
                                redirect('admin/data-admin/edit-admin/'.$id_user);
                            } else {
                                $this->m_admin->edit($data);
                                $this->session->set_flashdata('pesan', 'Akun berhasil diedit !');
                                redirect('admin/data-admin');
                            }
                        }
                    }
                    
                } else {
                    if ($new_password == "" && $confirm_password == "") {
                        $data = array(
                            'id_user' => $id_user,
                            'nama_user' => $this->input->post('nama_user'),
                            'username' => $this->input->post('username'),
                            'level' => '1',
                            'foto_user' => $upload_data['uploads']['file_name']
                        );
                        $this->m_admin->edit($data);
                        $this->session->set_flashdata('pesan', 'Akun berhasil diedit !');
                        redirect('admin/data-admin');
                    } else {
                        $data = array(
                            'id_user' => $id_user,
                            'nama_user' => $this->input->post('nama_user'),
                            'username' => $this->input->post('username'),
                            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                            'level' => '1',
                            'foto_user' => $upload_data['uploads']['file_name']
                        );
                        if($new_password != $confirm_password) {
                            $this->session->set_flashdata('password_gagal', 'Password tidak cocok !');
                            redirect('admin/data-admin/edit-admin/'.$id_user);
                        } else {
                            $this->m_admin->edit($data);
                            $this->session->set_flashdata('pesan', 'Akun berhasil diedit !');
                            redirect('admin/data-admin');
                        }
                    }
                }

            }

            $username=$this->input->post('username');
            $new_password=$this->input->post('password');
            $confirm_password=$this->input->post('konfirmasi_password');
            $admin=$this->m_admin->detail($id_user);
            $curr_username=$admin->username;

            if($curr_username != $username) {
                if ($this->m_admin->check_user_exist($username)) {
                    $this->session->set_flashdata('register_gagal', 'Username sudah ada !');
                    redirect('admin/data-admin/edit-admin/'.$id_user);
                } else {
                    if ($new_password == "" && $confirm_password == "") {
                        $data = array(
                            'id_user' => $id_user,
                            'nama_user' => $this->input->post('nama_user'),
                            'username' => $this->input->post('username'),
                            'level' => '1'
                        );
                        $this->m_admin->edit($data);
                        $this->session->set_flashdata('pesan', 'Akun berhasil diedit !');
                        redirect('admin/data-admin');
                    } else {
                        $data = array(
                            'id_user' => $id_user,
                            'nama_user' => $this->input->post('nama_user'),
                            'username' => $this->input->post('username'),
                            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                            'level' => '1'
                        );
                        if($new_password != $confirm_password) {
                            $this->session->set_flashdata('password_gagal', 'Password tidak cocok !');
                            redirect('admin/data-admin/edit-admin/'.$id_user);
                        } else {
                            $this->m_admin->edit($data);
                            $this->session->set_flashdata('pesan', 'Akun berhasil diedit !');
                            redirect('admin/data-admin');
                        }
                    }
                }
                
            } else {
                if ($new_password == "" && $confirm_password == "") {
                    $data = array(
                        'id_user' => $id_user,
                        'nama_user' => $this->input->post('nama_user'),
                        'username' => $this->input->post('username'),
                        'level' => '1'
                    );
                    $this->m_admin->edit($data);
                    $this->session->set_flashdata('pesan', 'Akun berhasil diedit !');
                    redirect('admin/data-admin');
                } else {
                    $data = array(
                        'id_user' => $id_user,
                        'nama_user' => $this->input->post('nama_user'),
                        'username' => $this->input->post('username'),
                        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                        'level' => '1'
                    );
                    if($new_password != $confirm_password) {
                        $this->session->set_flashdata('password_gagal', 'Password tidak cocok !');
                        redirect('admin/data-admin/edit-admin/'.$id_user);
                    } else {
                        $this->m_admin->edit($data);
                        $this->session->set_flashdata('pesan', 'Akun berhasil diedit !');
                        redirect('admin/data-admin');
                    }
                }
            }
        }

        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'admin' => $this->m_admin->detail($id_user),
            'isi' => 'admin/admin/v_editadmin'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function delete_admin($id_user) {
        // Menghapus file foto lama
        $user=$this->m_admin->detail($id_user);
        if ($user->foto_user != "") {
            unlink('./assets/image/foto_user/'.$user->foto_user);
        }
        // End menghapus file foto lama

        $data = array(
            'id_user' => $id_user
        );
        $this->m_admin->delete($data);
        $this->session->set_flashdata('pesan', 'Admin berhasil dihapus !');
                
        redirect('admin/data-admin');
    }

    /* End Data Admin */

    /* Akreditasi */

    public function akreditasi()
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'akreditasi' => $this->m_akreditasi->detail(),
            'isi' => 'admin/v_akreditasi'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function foto1_akreditasi()
    {
        $config['upload_path'] = './assets/image/foto_akreditasi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto1_akreditasi')) {
            $id_user = $this->session->userdata('id_user');
            $data = array(
                'user' => $this->m_user->detail($id_user),
                'profil' => $this->m_profil->detail(),
                'error' => $this->upload->display_errors(),
                'akreditasi' => $this->m_akreditasi->detail(),
                'isi' => 'admin/v_akreditasi'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/foto_akreditasi/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            // Menghapus file foto lama
            $akreditasi=$this->m_akreditasi->detail();
            if ($akreditasi->foto1_akreditasi != "") {
                unlink('./assets/image/foto_akreditasi/'.$akreditasi->foto1_akreditasi);
            }
            // End menghapus file foto lama

            $data = array(
                'id_akreditasi' => '1',
                'foto1_akreditasi' => $upload_data['uploads']['file_name']
            );
            $this->m_akreditasi->save($data);
            $this->session->set_flashdata('pesan', 'Gambar berhasil Disimpan !');
            
            redirect('admin/akreditasi');
            
        }
    }

    public function foto2_akreditasi()
    {
        $config['upload_path'] = './assets/image/foto_akreditasi/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto2_akreditasi')) {
            $id_user = $this->session->userdata('id_user');
            $data = array(
                'user' => $this->m_user->detail($id_user),
                'profil' => $this->m_profil->detail(),
                'error' => $this->upload->display_errors(),
                'akreditasi' => $this->m_akreditasi->detail(),
                'isi' => 'admin/v_akreditasi'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/foto_akreditasi/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            // Menghapus file foto lama
            $akreditasi=$this->m_akreditasi->detail();
            if ($akreditasi->foto2_akreditasi != "") {
                unlink('./assets/image/foto_akreditasi/'.$akreditasi->foto2_akreditasi);
            }
            // End menghapus file foto lama

            $data = array(
                'id_akreditasi' => '1',
                'foto2_akreditasi' => $upload_data['uploads']['file_name']
            );
            $this->m_akreditasi->save($data);
            $this->session->set_flashdata('pesan', 'Gambar berhasil Disimpan !');
            
            redirect('admin/akreditasi');
            
        }
    }

    /* End Akreditasi */

    /* Visi Misi */

    public function visi_misi()
    {
        $this->form_validation->set_rules('visi', 'Visi', 'required');
        $this->form_validation->set_rules('misi', 'Misi', 'required');
        $this->form_validation->set_rules('tujuan', 'Tujuan', 'required');

        if ($this->form_validation->run() == TRUE) {

            $data = array(
                'id_visimisi' => '1',
                'visi' => $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
                'tujuan' => $this->input->post('tujuan')
            );
            $this->m_visimisi->save($data);
            $this->session->set_flashdata('pesan', 'Data berhasil Disimpan !');
            
            redirect('admin/visi-misi-tujuan');

        }

        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'visimisi' => $this->m_visimisi->detail(),
            'isi' => 'admin/v_visimisi'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);

    }

    /* End Visi Misi */

    /* Profil */

    public function profil()
    {
        $this->form_validation->set_rules('nama', 'Nama Lembaga', 'required');
        $this->form_validation->set_rules('no_telp', 'Nomor Telepon Lembaga', 'required');
        $this->form_validation->set_rules('email', 'Email Lembaga', 'required');

        if ($this->form_validation->run() == TRUE) {
            
            $data = array(
                'id_profil' => '1',
                'nama' => $this->input->post('nama'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email')
            );
            $this->m_profil->save($data);
            $this->session->set_flashdata('pesan', 'Profil berhasil diupdate !');
            
            redirect('admin/profil');

        }

        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'medsos' => $this->m_profil->list_medsos(),
            'isi' => 'admin/v_profil'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function logo()
    {
        $config['upload_path'] = './assets/image/logo/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = 2000;
        $this->upload->initialize($config);
        
        if (!$this->upload->do_upload('logo')) {
            $data = array(
                'user' => $this->m_user->detail($id_user),
                'profil' => $this->m_profil->detail(),
                'error' => $this->upload->display_errors(),
                'isi' => 'admin/v_profil'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/logo/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            // Menghapus file foto lama
            $logo=$this->m_profil->detail();
            if ($logo->logo != "") {
                unlink('./assets/image/logo/'.$logo->logo);
            }
            // End menghapus file foto lama

            $data = array(
                'id_profil' => '1',
                'logo' => $upload_data['uploads']['file_name']
            );
            $this->m_profil->save($data);
            $this->session->set_flashdata('pesan', 'Logo berhasil Diubah !');
            
            redirect('admin/profil');
            
        }
    }

    public function medsos($id_medsos)
    {
        $this->form_validation->set_rules('nama_medsos', 'Nama Media Sosial', 'required');
        $this->form_validation->set_rules('link_medsos', 'Link Media Sosial', 'required');

        if ($this->form_validation->run() == TRUE) {
            
            $data = array(
                'id_medsos' => $id_medsos,
                'nama_medsos' => $this->input->post('nama_medsos'),
                'link_medsos' => $this->input->post('link_medsos')
            );
            $this->m_profil->update_medsos($data);
            $this->session->set_flashdata('pesan', 'Media Sosial berhasil diupdate !');
            
            redirect('admin/profil');

        }
    }

    /* End Profil */

    /* Struktur */

    public function struktur()
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'struktur' => $this->m_struktur->detail(),
            'isi' => 'admin/v_struktur'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function foto_struktur()
    {
        $config['upload_path'] = './assets/image/foto_struktur/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto_struktur')) {
            $id_user = $this->session->userdata('id_user');
            $data = array(
                'user' => $this->m_user->detail($id_user),
                'profil' => $this->m_profil->detail(),
                'error' => $this->upload->display_errors(),
                'struktur' => $this->m_struktur->detail(),
                'isi' => 'admin/v_struktur'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/foto_struktur/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            // Menghapus file foto lama
            $struktur=$this->m_struktur->detail();
            if ($struktur->foto_struktur != "") {
                unlink('./assets/image/foto_struktur/'.$struktur->foto_struktur);
            }
            // End menghapus file foto lama

            $data = array(
                'id_struktur' => '1',
                'foto_struktur' => $upload_data['uploads']['file_name']
            );
            $this->m_struktur->save($data);
            $this->session->set_flashdata('pesan', 'Foto berhasil Disimpan !');
            
            redirect('admin/struktur');
            
        }
    }

    /* End Struktur */

    /* Pembelajaran */

    public function pembelajaran()
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'program' => $this->m_pembelajaran->lists(),
            'isi' => 'admin/pembelajaran/v_pembelajaran'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function addprogram()
    {
        $this->form_validation->set_rules('nama_program', 'Nama Program', 'required');
        $this->form_validation->set_rules('ket_program', 'Keterangan Program', 'required', array('required'=>'%s harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/foto_program/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto_program')) {
                $id_user = $this->session->userdata('id_user');
                $data = array(
                    'user' => $this->m_user->detail($id_user),
                    'profil' => $this->m_profil->detail(),
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/pembelajaran/v_addprogram'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                
            }
            else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/foto_program/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_program' => $this->input->post('nama_program'),
                    'ket_program' => $this->input->post('ket_program'),
                    'foto_program' => $upload_data['uploads']['file_name']
                );
                $this->m_pembelajaran->add($data);
                $this->session->set_flashdata('pesan', 'Program berhasil ditambahkan !');
                
                redirect('admin/pembelajaran');
            }

        }

        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'isi' => 'admin/pembelajaran/v_addprogram'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function editprogram($id_program) {
        $this->form_validation->set_rules('nama_program', 'Nama Program', 'required');
        $this->form_validation->set_rules('ket_program', 'Keterangan Program', 'required', array('required'=>'%s harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/foto_program/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
            
            if (!$this->upload->do_upload('foto_program')) {
                $id_user = $this->session->userdata('id_user');
                $data = array(
                    'user' => $this->m_user->detail($id_user),
                    'profil' => $this->m_profil->detail(),
                    'error' => $this->upload->display_errors(),
                    'program' => $this->m_pembelajaran->detail($id_program),
                    'isi' => 'admin/pembelajaran/v_editprogram'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE); 
            }
            else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/foto_program/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Menghapus file foto lama
                $program=$this->m_pembelajaran->detail($id_program);
                if ($program->foto_program != "") {
                    unlink('./assets/image/foto_program/'.$program->foto_program);
                }
                // End menghapus file foto lama

                $data = array(
                    'id_program' => $id_program,
                    'nama_program' => $this->input->post('nama_program'),
                    'ket_program' => $this->input->post('ket_program'),
                    'foto_program' => $upload_data['uploads']['file_name']
                );
                $this->m_pembelajaran->edit($data);
                $this->session->set_flashdata('pesan', 'Program berhasil diedit !');
                
                redirect('admin/pembelajaran');
            }

            $data = array(
                'id_program' => $id_program,
                'nama_program' => $this->input->post('nama_program'),
                'ket_program' => $this->input->post('ket_program')
            );
            $this->m_pembelajaran->edit($data);
            $this->session->set_flashdata('pesan', 'Program berhasil diedit !');
            
            redirect('admin/pembelajaran');

        }

        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'program' => $this->m_pembelajaran->detail($id_program),
            'isi' => 'admin/pembelajaran/v_editprogram'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function deleteprogram($id_program) {
        // Menghapus file foto lama
        $program=$this->m_pembelajaran->detail($id_program);
        if ($program->foto_program != "") {
            unlink('./assets/image/foto_program/'.$program->foto_program);
        }
        // End menghapus file foto lama

        $data = array(
            'id_program' => $id_program
        );
        $this->m_pembelajaran->delete($data);
        $this->session->set_flashdata('pesan', 'Program berhasil dihapus !');
                
        redirect('admin/pembelajaran');
    }

    /* End Pembelajaran */

    /* Galeri */

    public function galeri()
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'galeri' => $this->m_galeri->lists(),
            'jml_foto' => $this->m_galeri->jumlahfoto(),
            'jml_video' => $this->m_galeri->jumlahvideo(),
            'isi' => 'admin/galeri/v_galeri',
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function addgaleri() {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/sampul_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('sampul_galeri')) {
                $id_user = $this->session->userdata('id_user');
                $data = array(
                    'user' => $this->m_user->detail($id_user),
                    'profil' => $this->m_profil->detail(),
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/galeri/v_addgaleri'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                
            }
            else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/sampul_galeri/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'nama_galeri' => $this->input->post('nama_galeri'),
                    'sampul_galeri' => $upload_data['uploads']['file_name']
                );
                $this->m_galeri->add($data);
                $this->session->set_flashdata('pesan', 'Galeri berhasil ditambahkan !');
                
                redirect('admin/galeri');
            }

        }

        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'isi' => 'admin/galeri/v_addgaleri'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function editgaleri($id_galeri) {
        $this->form_validation->set_rules('nama_galeri', 'Nama Galeri', 'required');

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/sampul_galeri/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('sampul_galeri')) {
                $id_user = $this->session->userdata('id_user');
                $data = array(
                    'user' => $this->m_user->detail($id_user),
                    'profil' => $this->m_profil->detail(),
                    'error' => $this->upload->display_errors(),
                    'galeri' => $this->m_galeri->detail($id_galeri),
                    'isi' => 'admin/galeri/v_editgaleri'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                
            }
            else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/sampul_galeri/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Menghapus file foto lama
                $galeri=$this->m_galeri->detail($id_galeri);
                if ($galeri->sampul_galeri != "") {
                    unlink('./assets/image/sampul_galeri/'.$galeri->sampul_galeri);
                }
                // End menghapus file foto lama

                $data = array(
                    'id_galeri' => $id_galeri,
                    'nama_galeri' => $this->input->post('nama_galeri'),
                    'sampul_galeri' => $upload_data['uploads']['file_name']
                );
                $this->m_galeri->edit($data);
                $this->session->set_flashdata('pesan', 'Galeri berhasil diedit !');
                
                redirect('admin/galeri');
                
            }

            $data = array(
                'id_galeri' => $id_galeri,
                'nama_galeri' => $this->input->post('nama_galeri')
            );
            $this->m_galeri->edit($data);
            $this->session->set_flashdata('pesan', 'Galeri berhasil diedit !');
            
            redirect('admin/galeri');

        }

        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'galeri' => $this->m_galeri->detail($id_galeri),
            'isi' => 'admin/galeri/v_editgaleri'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function deletegaleri($id_galeri) {
        // Menghapus file foto lama
        $galeri=$this->m_galeri->detail($id_galeri);
        if ($galeri->sampul_galeri != "") {
            unlink('./assets/image/sampul_galeri/'.$galeri->sampul_galeri);
        }
        // End menghapus file foto lama

        // Menghapus file foto lama
        $foto_galeri=$this->m_galeri->lists_foto($id_galeri);
        foreach ($foto_galeri as $key => $value) {
            if ($value->foto != "") {
                unlink('./assets/image/foto_galeri/'.$value->foto);
            }
        }
        // End menghapus file foto lama

        // Menghapus file video lama
        $video_galeri=$this->m_galeri->lists_video($id_galeri);
        foreach ($video_galeri as $key => $value) {
            if ($value->video != "") {
                unlink('./assets/video/video_galeri/'.$value->video);
            }
        }
        // End menghapus file video lama

        $data = array(
            'id_galeri' => $id_galeri
        );
        $this->m_galeri->delete($data);
        $this->m_galeri->delete_foto_galeri($data);
        $this->m_galeri->delete_video_galeri($data);
        $this->session->set_flashdata('pesan', 'Galeri berhasil hapus !');
                
        redirect('admin/galeri');
    }

    public function showgaleri($id_galeri)
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'galeri' => $this->m_galeri->detail($id_galeri),
            'foto' => $this->m_galeri->lists_foto($id_galeri),
            'video' => $this->m_galeri->lists_video($id_galeri),
            'jml_foto' => $this->m_galeri->detail_jumlahfoto($id_galeri),
            'jml_video' => $this->m_galeri->detail_jumlahvideo($id_galeri),
            'isi' => 'admin/galeri/v_showgaleri'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function addfoto($id_galeri) {
 
        $config['upload_path'] = './assets/image/foto_galeri/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2000;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto')) {
            $id_user = $this->session->userdata('id_user');
            $data = array(
                'user' => $this->m_user->detail($id_user),
                'profil' => $this->m_profil->detail(),
                'error' => $this->upload->display_errors(),
                'galeri' => $this->m_galeri->detail($id_galeri),
                'foto' => $this->m_galeri->lists_foto($id_galeri),
                'video' => $this->m_galeri->lists_video($id_galeri),
                'jml_foto' => $this->m_galeri->detail_jumlahfoto($id_galeri),
                'jml_video' => $this->m_galeri->detail_jumlahvideo($id_galeri),
                'isi' => 'admin/galeri/v_showgaleri'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            
        }
        else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/foto_galeri/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'id_galeri' => $id_galeri,
                'foto' => $upload_data['uploads']['file_name']
            );
            $this->m_galeri->add_foto($data);
            $this->session->set_flashdata('pesan', 'Foto Galeri berhasil ditambahkan !');
            
            redirect('admin/galeri/detail-galeri/'.$id_galeri);
            
        }

    }

    public function deletefoto($id_galeri, $id_foto) {
        // Menghapus file foto lama
        $foto=$this->m_galeri->detail_foto($id_foto);
        if ($foto->foto != "") {
            unlink('./assets/image/foto_galeri/'.$foto->foto);
        }
        // End menghapus file foto lama

        $data = array(
            'id_foto' => $id_foto
        );
        $this->m_galeri->delete_foto($data);
        $this->session->set_flashdata('pesan', 'Foto berhasil dihapus !');
                
        redirect('admin/galeri/detail-galeri/'.$id_galeri);
    }

    public function addvideo($id_galeri) {
 
        $config['upload_path'] = './assets/video/video_galeri/';
        $config['allowed_types'] = 'mp4|mkv|3gp';
        $config['max_size'] = 20000;
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('video')) {
            $id_user = $this->session->userdata('id_user');
            $data = array(
                'user' => $this->m_user->detail($id_user),
                'profil' => $this->m_profil->detail(),
                'error' => $this->upload->display_errors(),
                'galeri' => $this->m_galeri->detail($id_galeri),
                'foto' => $this->m_galeri->lists_foto($id_galeri),
                'video' => $this->m_galeri->lists_video($id_galeri),
                'jml_foto' => $this->m_galeri->detail_jumlahfoto($id_galeri),
                'jml_video' => $this->m_galeri->detail_jumlahvideo($id_galeri),
                'isi' => 'admin/galeri/v_showgaleri'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            
        }
        else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/video/video_galeri/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'id_galeri' => $id_galeri,
                'video' => $upload_data['uploads']['file_name']
            );
            $this->m_galeri->add_video($data);
            $this->session->set_flashdata('pesan', 'Video Galeri berhasil ditambahkan !');
            
            redirect('admin/galeri/detail-galeri/'.$id_galeri);
            
        }

    }

    public function deletevideo($id_galeri, $id_video) {
        // Menghapus file video lama
        $video=$this->m_galeri->detail_video($id_video);
        if ($video->video != "") {
            unlink('./assets/video/video_galeri/'.$video->video);
        }
        // End menghapus file video lama

        $data = array(
            'id_video' => $id_video
        );
        $this->m_galeri->delete_video($data);
        $this->session->set_flashdata('pesan', 'Video berhasil dihapus !');
                
        redirect('admin/galeri/detail-galeri/'.$id_galeri);
    }

    /* End Galeri */

    /* Alumni */

    public function alumni()
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'isi' => 'admin/v_alumni'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    /* End Alumni */

    /* Berita */

    public function berita()
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'berita' => $this->m_berita->lists(),
            'isi' => 'admin/berita/v_berita'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function addberita() {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required'=>'%s harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/foto_berita/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar_berita')) {
                $id_user = $this->session->userdata('id_user');
                $data = array(
                    'user' => $this->m_user->detail($id_user),
                    'profil' => $this->m_profil->detail(),
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/berita/v_addberita'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE);
                
            }
            else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/foto_berita/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'judul_berita' => $this->input->post('judul_berita'),
                    'slug_berita' => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                    'isi_berita' => $this->input->post('isi_berita'),
                    'tgl_berita' => date('Y-m-d'),
                    'id_user' => $this->session->userdata('id_user'),
                    'gambar_berita' => $upload_data['uploads']['file_name']
                );
                $this->m_berita->add($data);
                $this->session->set_flashdata('pesan', 'Berita berhasil diposting !');
                
                redirect('admin/berita');
            }

        }

        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'isi' => 'admin/berita/v_addberita'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function editberita($id_berita) {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required', array('required'=>'%s harus diisi'));

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/image/foto_berita/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = 2000;
            $this->upload->initialize($config);
            
            if (!$this->upload->do_upload('gambar_berita')) {
                $id_user = $this->session->userdata('id_user');
                $data = array(
                    'user' => $this->m_user->detail($id_user),
                    'profil' => $this->m_profil->detail(),
                    'error' => $this->upload->display_errors(),
                    'berita' => $this->m_berita->detail($id_berita),
                    'isi' => 'admin/berita/v_editberita'
                );
                $this->load->view('admin/layout/v_wrapper', $data, FALSE); 
            }
            else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/image/foto_berita/'.$upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                // Menghapus file foto lama
                $berita=$this->m_berita->detail($id_berita);
                if ($berita->gambar_berita != "") {
                    unlink('./assets/image/foto_berita/'.$berita->gambar_berita);
                }
                // End menghapus file foto lama

                $data = array(
                    'id_berita' => $id_berita,
                    'judul_berita' => $this->input->post('judul_berita'),
                    'slug_berita' => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                    'isi_berita' => $this->input->post('isi_berita'),
                    //'tgl_berita' => date('Y-m-d'),
                    'id_user' => $this->session->userdata('id_user'),
                    'gambar_berita' => $upload_data['uploads']['file_name']
                );
                $this->m_berita->edit($data);
                $this->session->set_flashdata('pesan', 'Berita berhasil direposting !');
                
                redirect('admin/berita');
            }

            $data = array(
                'id_berita' => $id_berita,
                'judul_berita' => $this->input->post('judul_berita'),
                'slug_berita' => url_title($this->input->post('judul_berita'), 'dash', TRUE),
                'isi_berita' => $this->input->post('isi_berita'),
                //'tgl_berita' => date('Y-m-d'),
                'id_user' => $this->session->userdata('id_user')
            );
            $this->m_berita->edit($data);
            $this->session->set_flashdata('pesan', 'Berita berhasil direposting !');
            
            redirect('admin/berita');

        }

        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'berita' => $this->m_berita->detail($id_berita),
            'isi' => 'admin/berita/v_editberita'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function deleteberita($id_berita) {
        // Menghapus file foto lama
        $berita=$this->m_berita->detail($id_berita);
        if ($berita->gambar_berita != "") {
            unlink('./assets/image/foto_berita/'.$berita->gambar_berita);
        }
        // End menghapus file foto lama

        $data = array(
            'id_berita' => $id_berita
        );
        $this->m_berita->delete($data);
        $this->session->set_flashdata('pesan', 'Berita berhasil hapus !');
                
        redirect('admin/berita');
    }

    /* End Berita */

    /* Legalitas */

    public function legalitas()
    {
        $id_user = $this->session->userdata('id_user');
        $data = array(
            'user' => $this->m_user->detail($id_user),
            'profil' => $this->m_profil->detail(),
            'legalitas' => $this->m_legalitas->detail(),
            'isi' => 'admin/v_legalitas'
        );
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }

    public function foto1_legalitas()
    {
        $config['upload_path'] = './assets/image/foto_legalitas/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 4000;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto1_legalitas')) {
            $id_user = $this->session->userdata('id_user');
            $data = array(
                'user' => $this->m_user->detail($id_user),
                'profil' => $this->m_profil->detail(),
                'error' => $this->upload->display_errors(),
                'legalitas' => $this->m_legalitas->detail(),
                'isi' => 'admin/v_legalitas'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/foto_legalitas/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            // Menghapus file foto lama
            $legalitas=$this->m_legalitas->detail();
            if ($legalitas->foto1_legalitas != "") {
                unlink('./assets/image/foto_legalitas/'.$legalitas->foto1_legalitas);
            }
            // End menghapus file foto lama

            $data = array(
                'id_legalitas' => '1',
                'foto1_legalitas' => $upload_data['uploads']['file_name']
            );
            $this->m_legalitas->save($data);
            $this->session->set_flashdata('pesan', 'Gambar berhasil Disimpan !');
            
            redirect('admin/legalitas');
            
        }
    }

    public function foto2_legalitas()
    {
        $config['upload_path'] = './assets/image/foto_legalitas/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 4000;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto2_legalitas')) {
            $id_user = $this->session->userdata('id_user');
            $data = array(
                'user' => $this->m_user->detail($id_user),
                'profil' => $this->m_profil->detail(),
                'error' => $this->upload->display_errors(),
                'legalitas' => $this->m_legalitas->detail(),
                'isi' => 'admin/v_legalitas'
            );
            $this->load->view('admin/layout/v_wrapper', $data, FALSE);
            
        } else {
            $upload_data = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] = './assets/image/foto_legalitas/'.$upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            // Menghapus file foto lama
            $legalitas=$this->m_legalitas->detail();
            if ($legalitas->foto2_legalitas != "") {
                unlink('./assets/image/foto_legalitas/'.$legalitas->foto2_legalitas);
            }
            // End menghapus file foto lama

            $data = array(
                'id_legalitas' => '1',
                'foto2_legalitas' => $upload_data['uploads']['file_name']
            );
            $this->m_legalitas->save($data);
            $this->session->set_flashdata('pesan', 'Gambar berhasil Disimpan !');
            
            redirect('admin/legalitas');
            
        }
    }

    /* End Akreditasi */

}

/* End of file Admin.php */
