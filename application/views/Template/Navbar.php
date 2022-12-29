<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="<?= base_url() ?>Home" class="navbar-brand">
            <img src="<?= base_url() ?>/assets/Image-Upload/AGAZ-PROPERTI.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
            <span class="brand-text font-weight-light"><?= $title; ?></span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= base_url() ?>Home" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/6282138447484" class="nav-link">Contact</a>
                </li>

            </ul>

        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>Profile-Customer">
                    <i class="fas fa-regular fa-user"></i>
                    <span>Heru</span>
                </a>

            </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->