<div class="container-fluid">
    <div class="row mr-4 ml-4 mt-4 mb-4">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="card-img-top" style="border-radius: 10px; height: 150px; width: 150px; " src="<?= base_url() ?>assets/Image-Upload/user.png" alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">Heru</h3>

                    <div class="form-group mt-5">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="input-group-text">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-pane" id="settings">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <span>Heru <a class="ml-2" href="#">Ubah</a></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <span>xxx@email.com <a class="ml-2" href="#">Ubah</a></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <span>213xxxxxx <a class="ml-2" href="#">Ubah</a></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <span>01/01/1996 <a class="ml-2" href="#">Ubah</a></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <span>08xxxxxx <a class="ml-2" href="#">Ubah</a></span>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>