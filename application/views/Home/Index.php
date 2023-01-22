<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> <?= date('d.F.Y'); ?></h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item mt-2"><span href="#">Pilih</span></li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Kategori</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?= base_url() ?>Rumah" class="dropdown-item">Rumah </a></li>
                                <li><a href="<?= base_url() ?>Tanah" class="dropdown-item">Tanah</a></li>
                            </ul>
                        </li>
                    </ol>
                </div> -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <img height="370" width="370" src="https://lzd-img-global.slatic.net/g/p/755fedc6a4d647169d8ad77bb7bf12fa.jpg_720x720q80.jpg_.webp" class="card-img-top" alt="https://properti.kompas.com/read/2020/10/27/085854021/rumah-anda-kecil-jangan-khawatir-ada-5-keuntungannya?page=all">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Baju</h5>
                            <p class="card-text"><span>Alamat: </span>Surabaya</p>
                            <b class="card-text">Rp.<?= number_format("500000", 2, ",", "."); ?></b>
                            <div class="d-flex mt-3 justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="<?= base_url() ?>Detail-Rumah" class="btn btn-sm btn-outline-secondary">Detail</a>
                                </div>
                                <small class="text-muted">12/12/1995</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <img height="370" width="370" src="https://cf.shopee.co.id/file/ac5d58374469c6873f015d958dd3d1d3" class="card-img-top" alt="https://www.cnnindonesia.com/teknologi/20181013105333-199-338174/permukaan-tanah-di-malang-raya-turun-tiga-meter">
                        <div class="card-body">
                            <h5 class="card-title mb-2">Celana</h5>
                            <p class="card-text"><span>Alamat: </span>Surabaya</p>
                            <b class="card-text">Rp.150.000</b>
                            <div class="d-flex mt-3 justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="<?= base_url() ?>Detail-Tanah" class="btn btn-sm btn-outline-secondary">Detail</a>
                                </div>
                                <small class="text-muted">12/12/1995</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->