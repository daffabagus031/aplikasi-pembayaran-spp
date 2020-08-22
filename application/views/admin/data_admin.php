<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Petugas</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger mr-3 ml-4" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif ?>
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <a href="" data-toggle="modal" data-target="#newMenuModal" class="btn btn-success">Tambah Petugas</a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Petugas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama petugas</th>
                            <th>Username</th>
                            <th>Tanggal dibuat</th>
                            <th>Level</th>
                            <th>Aktivasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama petugas</th>
                            <th>Username</th>
                            <th>Tanggal dibuat</th>
                            <th>Level</th>
                            <th>Aktivasi</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($petugas as $ptg) {
                            $active = $ptg['is_active'];
                            if ($active == 1) {
                                $active = 'Aktif';
                            } else if ($active == 0) {
                                $active = 'Tidak Aktif';
                            }
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $ptg['nama_petugas']; ?></td>
                                <td><?= $ptg['username']; ?></td>
                                <td><?= date('d F Y', $ptg['date_created']); ?></td>
                                <td><?= $ptg['level']; ?></td>
                                <td><?= $active; ?></td>
                                <td class="text-center">
                                    <a href="#" class="badge badge-warning">Edit</a>
                                    <a href="#" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Modal -->
        <div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newMenuModalLabel">Tambah Data Petugas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?= base_url('admin/datapetugas'); ?>">
                        <div class="modal-body">
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
                                <label for="exampleFormControlSelect1">Level</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="level">
                                    <option value="">-- Pilih Level --</option>
                                    <option value="admin">Admin</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                                <?= form_error('level', '<small class="text-danger pl-2">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>