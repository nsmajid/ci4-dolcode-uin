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
                    <?=csrf_field()?>
                    <div class="form-group form-default form-static-label">
                        <input type="text" name="nama_karyawan" class="form-control" required>
                        <span class="form-bar"></span>
                        <label class="float-label">Nama</label>
                    </div>

                    <div class="form-group form-default form-static-label">
                        <textarea class="form-control" name="alamat" required></textarea>
                        <span class="form-bar"></span>
                        <label class="float-label">Alamat</label>
                    </div>
                    <div class="form-group form-default form-static-label">
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <span class="form-bar"></span>
                        <label class="float-label">Jenis Kelamin</label>
                    </div>
                    <div class="form-group form-default form-static-label">
                        <select class="form-control" name="id_jabatan" id="id_jabatan" required>
                            <option value="">--Pilih Jabatan--</option>
                            <?php

                            foreach ($data['jabatan'] as $jabatan) {
                            ?>
                                <option value="<?= $jabatan->id_jabatan ?>"><?= $jabatan->jabatan ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <span class="form-bar"></span>
                        <label class="float-label">Jabatan</label>
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