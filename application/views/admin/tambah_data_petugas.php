<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><a href="<?= base_url('admin/datapetugas') ?>" class="text-dark"><i class="fa fa-chevron-left" aria-hidden="true"></i></a> Form Petugas</h1>
    </div>

    <form method="POST" action="<?= base_url('admin/formpetugas'); ?>">
        <div class="form-group">
            <label class="small mb-1" for="">Nama Lengkap</label>
            <input class="form-control py-4" id="inputName" name="name" type="text" aria-describedby="" placeholder="Masukan Nama Lengkap" value="<?= set_value('name'); ?>" />
            <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Username</label>
            <input class="form-control py-4" id="inputUsername" name="username" type="text" aria-describedby="emailHelp" placeholder="Masukan Username" value="<?= set_value('username'); ?>" />
            <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
        </div>
        <div class="form-row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputPassword">Kata Sandi</label>
                    <input class="form-control py-4" id="inputPassword" name="password1" type="password" placeholder="Masukan Kata Sandi" />
                    <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="small mb-1" for="inputConfirmPassword">Confirm
                        Password</label>
                    <input class="form-control py-4" id="inputConfirmPassword" name="password2" type="password" placeholder="Konfirmasi Kata Sandi" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="small mb-1" for="inputEmailAddress">Level</label>
            <br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="level" id="inlineRadio1" value="admin">
                <label class="form-check-label" for="inlineRadio1">Admin</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="level" id="inlineRadio2" value="petugas">
                <label class="form-check-label" for="inlineRadio2">Petugas</label>
                <?= form_error('level', '<small class="text-danger pl-2">', '</small>'); ?>
            </div>
        </div>
        <div class="form-group mt-4 mb-0"><button class="btn btn-success btn-block" type="submit">Tambah Data</button></div>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->