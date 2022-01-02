                    
            <footer class="main-footer text-center">
                <strong>Copyright &copy; 2021 <a href="#"><?=$profil->nama?></a></strong>
                <div class="float-right d-none d-sm-inline-block">
                
                </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?=base_url()?>plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?=base_url()?>plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?=base_url()?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="<?=base_url()?>plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="<?=base_url()?>plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="<?=base_url()?>plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?=base_url()?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?=base_url()?>plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?=base_url()?>plugins/moment/moment.min.js"></script>
        <script src="<?=base_url()?>plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?=base_url()?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?=base_url()?>plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?=base_url()?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="<?=base_url()?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="<?=base_url()?>plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- Toastr -->
        <script src="<?=base_url()?>plugins/toastr/toastr.min.js"></script>
        <!-- Ekko Lightbox -->
        <script src="<?=base_url()?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?=base_url()?>dist/js/adminlte.js"></script>
        <!-- Summernote -->
        <script src="<?=base_url()?>plugins/summernote/summernote-bs4.min.js"></script>
        <!-- CodeMirror -->
        <script src="<?=base_url()?>plugins/codemirror/codemirror.js"></script>
        <script src="<?=base_url()?>plugins/codemirror/mode/css/css.js"></script>
        <script src="<?=base_url()?>plugins/codemirror/mode/xml/xml.js"></script>
        <script src="<?=base_url()?>plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?=base_url()?>dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?=base_url()?>dist/js/pages/dashboard.js"></script>
        <!-- DataTables  & Plugins -->
        <script src="<?=base_url()?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="<?=base_url()?>plugins/jszip/jszip.min.js"></script>
        <script src="<?=base_url()?>plugins/pdfmake/pdfmake.min.js"></script>
        <script src="<?=base_url()?>plugins/pdfmake/vfs_fonts.js"></script>
        <script src="<?=base_url()?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="<?=base_url()?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- Page specific script -->
        <script>
            $(function () {
                $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                });
            });
        </script>
        <script>
            $(function () {
                bsCustomFileInput.init();
            });
        </script>
        <script>
            $(function(){
                /** add active class and stay opened when selected */
                var url = window.location;

                // for sidebar menu entirely but not cover treeview
                $('ul.nav-sidebar a').filter(function() {
                    return this.href == url;
                }).addClass('active');
            });
        </script>
        <script>
            <?php if ($this->uri->segment(2) == "pembelajaran") { ?>
                $('ul.nav-sidebar a#pembelajaran').addClass('active');
            <?php }
            if ($this->uri->segment(2) == "galeri") { ?>
                $('ul.nav-sidebar a#galeri').addClass('active');
            <?php }
            if ($this->uri->segment(2) == "berita") { ?>
                $('ul.nav-sidebar a#berita').addClass('active');
            <?php } 
            if ($this->uri->segment(2) == "data-admin") { ?>
                $('ul.nav-sidebar a#data-admin').addClass('active');
            <?php }
            ?>
        </script>
        <script>
            $(document).ready(function() {
                $(function () {
                    // Summernote
                    $('.summernote').summernote({
                        placeholder: 'Masukkan Isi Berita',
                        height: 300,
                        codemirror: { // codemirror options
                            mode: 'htmlmixed',
                            theme: 'monokai'
                        },
                        toolbar: [
                            // [groupName, [list of button]]
                            ['style', ['style']],
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['font', ['strikethrough', 'superscript', 'subscript']],
                            ['fontname', ['fontname']],
                            ['fontsize', ['fontsize', 'fontsizeunit']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['height', ['height']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
                        ],
                        lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '1.6', '1.8', '2.0', '3.0']
                    });

                    // Summernote
                    $('.summernote2').summernote({
                        placeholder: 'Masukkan Keterangan Program',
                        height: 120,
                        codemirror: { // codemirror options
                            mode: 'htmlmixed',
                            theme: 'monokai'
                        },
                        toolbar: [
                            // [groupName, [list of button]]
                            ['style', ['style']],
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['font', ['strikethrough', 'superscript', 'subscript']],
                            ['fontname', ['fontname']],
                            ['fontsize', ['fontsize', 'fontsizeunit']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['height', ['height']],
                            ['table', ['table']],
                            ['insert', ['link', 'picture', 'video']],
                            ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
                        ],
                        lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '1.6', '1.8', '2.0', '3.0']
                    });

                    // Summernote
                    $('.summernotes1').summernote({
                        placeholder: 'Masukkan Isi Berita',
                        height: 110,
                        codemirror: { // codemirror options
                            mode: 'htmlmixed',
                            theme: 'monokai'
                        },
                        toolbar: [
                            // [groupName, [list of button]]
                            ['style', ['style']],
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['font', ['strikethrough', 'superscript', 'subscript']],
                            ['fontname', ['fontname']],
                            ['fontsize', ['fontsize', 'fontsizeunit']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['height', ['height']],
                            ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
                        ],
                        lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '1.6', '1.8', '2.0', '3.0']
                    });

                    // Summernote
                    $('.summernotes2').summernote({
                        placeholder: 'Masukkan Isi Berita',
                        height: 160,
                        codemirror: { // codemirror options
                            mode: 'htmlmixed',
                            theme: 'monokai'
                        },
                        toolbar: [
                            // [groupName, [list of button]]
                            ['style', ['style']],
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['font', ['strikethrough', 'superscript', 'subscript']],
                            ['fontname', ['fontname']],
                            ['fontsize', ['fontsize', 'fontsizeunit']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['height', ['height']],
                            ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
                        ],
                        lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '1.6', '1.8', '2.0', '3.0']
                    });
                });
            });
        </script>
        <script>
            $(function() {
                toastr.options = {
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "6000",
                    "extendedTimeOut": "2000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }

                <?php if($this->session->flashdata('pesan')) { ?>
                    toastr.success("<?php echo $this->session->flashdata('pesan'); ?>");
                <?php }

                if(isset($_SESSION['pesan'])) {
                    unset($_SESSION['pesan']);
                }

                if(isset($error)) { ?>
                    toastr.error("<?php echo $error; ?>");
                <?php }

                if($this->session->flashdata('login_sukses')) { ?>
                    toastr.success("<?php echo $this->session->flashdata('login_sukses'); ?>");
                <?php }

                if(isset($_SESSION['login_sukses'])) {
                    unset($_SESSION['login_sukses']);
                }

                if($this->session->flashdata('password_gagal')) { ?>
                    toastr.error("<?php echo $this->session->flashdata('password_gagal'); ?>");
                <?php }

                if(isset($_SESSION['password_gagal'])) {
                    unset($_SESSION['password_gagal']);
                }

                if($this->session->flashdata('register_gagal')) { ?>
                    toastr.error("<?php echo $this->session->flashdata('register_gagal'); ?>");
                <?php }

                if(isset($_SESSION['register_gagal'])) {
                    unset($_SESSION['register_gagal']);
                }
                ?> 
            });
        </script>
        <script>
            $(function () {
                $('.addberita').on('click', function(e) {
                    var judulberita = document.getElementById("judulberita").value;
                    var gambarberita = document.getElementById("gambarberita").value;
                    if($('.summernote').summernote('isEmpty') && judulberita != "" && gambarberita != "") {
                        toastr.warning("Masukkan Isi Berita !");

                        // cancel submit
                        e.preventDefault();
                    }
                });
                $('.editberita').on('click', function(e) {
                    var judulberita = document.getElementById("judulberita").value;
                    if($('.summernote').summernote('isEmpty') && judulberita != "") {
                        toastr.warning("Masukkan Isi Berita !");

                        // cancel submit
                        e.preventDefault();
                    }
                });
                $('.addprogram').on('click', function(e) {
                    var namaprogram = document.getElementById("namaprogram").value;
                    var fotoprogram = document.getElementById("fotoprogram").value;
                    if($('.summernote2').summernote('isEmpty') && namaprogram != "" && fotoprogram != "") {
                        toastr.warning("Masukkan Keterangan Program !");

                        // cancel submit
                        e.preventDefault();
                    }
                });
                $('.editprogram').on('click', function(e) {
                    var namaprogram = document.getElementById("namaprogram").value;
                    if($('.summernote2').summernote('isEmpty') && namaprogram != "") {
                        toastr.warning("Masukkan Keterangan Program !");

                        // cancel submit
                        e.preventDefault();
                    }
                });
            })
        </script>
        <script>
            $(function () {
                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                    event.preventDefault();
                    $(this).ekkoLightbox({
                        always_show_close:false
                    });
                });
            })
        </script>
        <script>
            $(document).ready(function() {
                $('.btnChange').click(function() {
                    $('.inputName').attr('readonly', false);
                    $('.inputUsername').attr('readonly', false);
                    $('.inputPassword').attr('readonly', false);
                    $('.typePassword').attr('disabled', false);
                    $('.btnChange').attr('hidden', true);
                    $('.btnSave').attr('hidden', false);
                    $('.btnCancel').attr('hidden', false);
                });
                $('.typePassword').click(function() {
                    if($('.inputPassword').attr("type") == "text"){
                        $('.inputPassword').attr('type', 'password');
                        $('.typePassword i').addClass( "fa-eye-slash" );
                        $('.typePassword i').removeClass( "fa-eye" );
                    }else if($('.inputPassword').attr("type") == "password"){
                        $('.inputPassword').attr('type', 'text');
                        $('.typePassword i').removeClass( "fa-eye-slash" );
                        $('.typePassword i').addClass( "fa-eye" );
                    }
                });

                $('.edit-akreditasi1').click(function() {
                    $('.list-akreditasi1').attr('hidden', true);
                    $('.editor-akreditasi1').attr('hidden', false);
                    $('.edit-akreditasi1').attr('hidden', true);
                    $('.save-akreditasi1').attr('hidden', false);
                    $('.cancel-akreditasi1').attr('hidden', false);
                });
                $('.edit-akreditasi2').click(function() {
                    $('.list-akreditasi2').attr('hidden', true);
                    $('.editor-akreditasi2').attr('hidden', false);
                    $('.edit-akreditasi2').attr('hidden', true);
                    $('.save-akreditasi2').attr('hidden', false);
                    $('.cancel-akreditasi2').attr('hidden', false);
                });

                $('.edit-visi-misi').click(function() {
                    $('.list-visi-misi').attr('hidden', true);
                    $('.editor-visi-misi').attr('hidden', false);
                    $('.edit-visi-misi').attr('hidden', true);
                    $('.save-visi-misi').attr('hidden', false);
                    $('.cancel-visi-misi').attr('hidden', false);
                });

                $('.edit-profil').click(function() {
                    $('.nama-lembaga').attr('readonly', false);
                    $('.no-telp-lembaga').attr('readonly', false);
                    $('.email-lembaga').attr('readonly', false);
                    $('.edit-profil').attr('hidden', true);
                    $('.save-profil').attr('hidden', false);
                    $('.cancel-profil').attr('hidden', false);
                });

                $('.edit-struktur').click(function() {
                    $('.list-struktur').attr('hidden', true);
                    $('.editor-struktur').attr('hidden', false);
                    $('.edit-struktur').attr('hidden', true);
                    $('.save-struktur').attr('hidden', false);
                    $('.cancel-struktur').attr('hidden', false);
                });

                $('.edit-legalitas1').click(function() {
                    $('.list-legalitas1').attr('hidden', true);
                    $('.editor-legalitas1').attr('hidden', false);
                    $('.edit-legalitas1').attr('hidden', true);
                    $('.save-legalitas1').attr('hidden', false);
                    $('.cancel-legalitas1').attr('hidden', false);
                });
                $('.edit-legalitas2').click(function() {
                    $('.list-legalitas2').attr('hidden', true);
                    $('.editor-legalitas2').attr('hidden', false);
                    $('.edit-legalitas2').attr('hidden', true);
                    $('.save-legalitas2').attr('hidden', false);
                    $('.cancel-legalitas2').attr('hidden', false);
                });

                $('.ganti-password').attr('style', 'background-color: #15BB59; border-color: #15BB59;');
                $('.kelola-akun').click(function() {
                    $('.kelola-akun').attr('style', false);
                    $('.ganti-password').attr('style', 'background-color: #15BB59; border-color: #15BB59;');
                    $('.show-ganti-password').attr('hidden', true);
                    $('.show-kelola-akun').attr('hidden', false);
                });
                $('.ganti-password').click(function() {
                    $('.ganti-password').attr('style', false);
                    $('.kelola-akun').attr('style', 'background-color: #15BB59; border-color: #15BB59;');
                    $('.show-ganti-password').attr('hidden', false);
                    $('.show-kelola-akun').attr('hidden', true);
                });
            });
        </script>
        <script>
            var loadFile = function (event) {
                var image = document.getElementById("output");
                image.src = URL.createObjectURL(event.target.files[0]);
            };
        </script>
    </body>
</html>