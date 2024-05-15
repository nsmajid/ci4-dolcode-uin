<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5>Formulir Tambah Karyawan</h5>
                <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
            </div>
            <div class="card-block">
                <form class="form-material" action="/admin/karyawan" method="POST">
                    <?= csrf_field() ?>
                    <div class="form-group <?= validation_show_error('nama_karyawan') ? 'form-danger' : null ?>  form-default form-static-label">
                        <input type="text" name="nama_karyawan" class="form-control" value="<?= old('nama_karyawan') ?>">
                        <span class="form-bar"></span>
                        <label class="float-label">Nama</label>
                        <?php
                        if (validation_show_error('nama_karyawan')) {
                        ?>
                            <span class="text-danger">Nama wajib diisi</span>
                        <?php
                        }
                        ?>
                    </div>

                    <div class="form-group <?= validation_show_error('alamat') ? 'form-danger' : null ?> form-default form-static-label">
                        <textarea class="form-control" name="alamat"><?= old('alamat') ?></textarea>
                        <span class="form-bar"></span>
                        <label class="float-label">Alamat</label>
                        <?php
                        if (validation_show_error('alamat')) {
                        ?>
                            <span class="text-danger">Alamat wajib diisi</span>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="form-group <?= validation_show_error('jenis_kelamin') ? 'form-danger' : null ?> form-default form-static-label">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="L" <?= old('jenis_kelamin') == 'L' ? 'selected' : null ?>> Laki-laki</option>
                            <option value="P" <?= old('jenis_kelamin') == 'P' ? 'selected' : null ?>> Perempuan</option>
                        </select>
                        <span class="form-bar"></span>
                        <label class="float-label">Jenis Kelamin</label>
                        <?php
                        if (validation_show_error('jenis_kelamin')) {
                        ?>
                            <span class="text-danger">Jenis kelamin diisi</span>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="form-group <?= validation_show_error('id_jabatan') ? 'form-danger' : null ?> form-default form-static-label">
                        <select class="form-control" name="id_jabatan" id="id_jabatan">
                            <option value="">--Pilih Jabatan--</option>
                            <?php

                            foreach ($data['jabatan'] as $jabatan) {
                            ?>
                                <option value="<?= $jabatan->id_jabatan ?>" <?= old('id_jabatan') == $jabatan->id_jabatan ? 'selected' : null ?>><?= $jabatan->jabatan ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <span class="form-bar"></span>
                        <label class="float-label">Jabatan</label>
                        <?php
                        if (validation_show_error('id_jabatan')) {
                        ?>
                            <span class="text-danger">Jabatan wajib diisi</span>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info waves-effect waves-light">Insert Karyawan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= view('layouts/navbar') ?>
<?= $this->endSection() ?>