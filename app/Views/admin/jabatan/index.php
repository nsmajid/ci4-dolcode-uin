<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h5>Jabatan</h5>
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
                        <th>Jabatan</th>
                        <th>Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data['jabatan'] as $jabatan) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $jabatan->jabatan ?></td>
                            <td><?= $jabatan->gaji ?></td>

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