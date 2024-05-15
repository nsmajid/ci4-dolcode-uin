<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h5>Hover Table</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option" style="width: 140px;">

            </ul>
        </div>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Karyawan</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data['karyawan'] as $karyawan) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $karyawan->nama_karyawan ?></td>
                            <td><?= $karyawan->alamat ?></td>
                            <td><?= $karyawan->jenis_kelamin == "L" ? "Laki-laki" : "Perempuan" ?></td>
                            <td><?= $karyawan->jabatan ?></td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= view('layouts/navbar') ?>
<?= $this->endSection() ?>