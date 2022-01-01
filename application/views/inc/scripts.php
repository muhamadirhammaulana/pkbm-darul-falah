<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(function(){
        var url = window.location;
        $('ul.nav-navbar a').filter(function() {
            return this.href == url;
        }).addClass('custom-dropdown-item-active');
    });
</script>
<script>
    <?php if ($this->uri->segment(1) == "") { ?>
        $('ul.navbar-nav a#home').addClass('active');
    <?php }

    if ($this->uri->segment(1) == "legalitas") { ?>
        $('ul.navbar-nav a#legalitas').addClass('active');
    <?php }

    $profil = $this->uri->segment(1);
    if ($profil == "akreditasi" || $profil == "visi-misi-tujuan" || $profil == "profil" || $profil == "struktur") { ?>
        $('ul.navbar-nav a#profil').addClass('active');
    <?php } 
    
    $informasi = $this->uri->segment(1);
    if ($informasi == "pembelajaran" || $informasi == "galeri" || $informasi == "alumni" || $informasi == "informasi-berita") { ?>
        $('ul.navbar-nav a#informasi').addClass('active');
    <?php } 
    
    ?>
</script>