
<div class="card">
    <div class="card-header">
        <h5>Daftar Karyawan</h5>
        <div class="card-header-right">
            <ul class="list-unstyled card-option" style="width: 150px; height: 200px;">
                <a href="/admin/karyawan/new" type="button" class="btn btn-sm btn-primary waves-effect waves-light">Tambah Karyawan</a>
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
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($karyawan as $karyawan) {
                    ?>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $karyawan->nama_karyawan ?></td>
                            <td><?= $karyawan->alamat ?></td>
                            <td><?= $karyawan->jenis_kelamin == "L" ? "Laki-laki" : "Perempuan" ?></td>
                            <td><?= $karyawan->jabatan ?></td>
                            <td class="d-flex">
                                <a href="/admin/karyawan/<?= $karyawan->id_karyawan ?>/edit" type="button" class="btn btn-sm btn-info waves-effect waves-light mr-2">Edit</a>
                                <form action="/admin/karyawan/<?= $karyawan->id_karyawan ?>" method="POST" onsubmit="return confirm('Do you really want to delete?');">

                                    <input type="hidden" name="_method" value="DELETE">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-sm btn-dark waves-effect waves-light">Delete</button>
                                </form>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>