    <!-- Main content -->
    <section class="content mr-4 ml-4 mt-4 mb-4">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="col-12">
                            <img height="250" width="500" src="https://asset.kompas.com/crops/icva5Lwu8mguAdL-ZHNbwHT-eZ0=/0x0:1200x800/750x500/data/photo/2020/10/26/5f96aecd62a38.jpg" class="product-image" alt="Product Image">
                        </div>
                        <div class="col-12 product-image-thumbs">
                            <div class="product-image-thumb active"><img src="https://asset.kompas.com/crops/icva5Lwu8mguAdL-ZHNbwHT-eZ0=/0x0:1200x800/750x500/data/photo/2020/10/26/5f96aecd62a38.jpg" alt="Product Image"></div>
                            <div class="product-image-thumb"><img src="<?= base_url() ?>assets/Image-Upload/Anggap-Saja-Ada-Gambar-Detail.jpg" alt="Product Image"></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <h3 class="my-3">Detail</h3>
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td>Luas Tanah</td>
                                    <td class="mr-3">1 KT - 1 KM - 300 m2</td>
                                </tr>
                                <tr>
                                    <td>Luas Rumah</td>
                                    <td class="mr-3">1 KT - 1 KM - 300 m2</td>
                                </tr>
                                <tr>
                                    <td>Alamat Jalan</td>
                                    <td>Jalan Yang Mempunyain Nama</td>
                                </tr>
                                <tr>
                                    <td>Pemilik Runah</td>
                                    <td>Manusia</td>
                                </tr>
                                <tr>
                                    <td>Sertifikasi</td>
                                    <td>SHM - Sertifikat Hak Milik</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-default text-center active">
                                <a href="" class="text-center text-secondary">
                                    Maps
                                    <br>
                                    <i class=" fa-solid fa-2x fa-map-location-dot"></i>
                                </a>
                            </label>
                            <label class="btn btn-default text-center active">
                                <a href="https://wa.me/628<?= random_string('nozero', 10); ?>" class="text-center text-secondary">
                                    Message
                                    <br>
                                    <i class="fa-regular fa-2x fa-envelope"></i>
                                </a>
                            </label>
                            <label class="btn btn-default text-center active">
                                <a href="" class="text-center text-secondary">
                                    Share
                                    <br>
                                    <i class="fa-solid fa-2x fa-share-nodes"></i>
                                </a>
                            </label>
                        </div>

                        <div class="py-2 px-3 mt-1">
                            <h2 class="mb-0">
                                Rp. <?= number_format("500000", 2, ",", "."); ?>
                            </h2>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">
                    <div class="tab-content p-3" id="nav-tabContent">
                        <h3 class="my-3">Deskripsi</h3>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->