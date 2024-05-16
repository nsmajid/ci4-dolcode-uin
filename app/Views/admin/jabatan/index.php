<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?=view('admin/jabatan/ajax', [
    'jabatan' => $data['jabatan']
])?>
<?= $this->endSection() ?>

<?= $this->section('navbar') ?>
<?= view('layouts/navbar') ?>
<?= $this->endSection() ?>

<?= $this->section('js') ?>

<script>

    // $.ajax({
    //     url: "http://localhost:8080/api/jabatan",
    //     // data: data,
    //     success: function(data) {
    //         $.each(data, function(k, v) {
    //             $('#table-jabatan > tbody:last-child').append('<tr><td>' + (k + 1) + '</td><td>' + v.jabatan + '</td><td>' + v.gaji + '</td></tr>');
    //             // console.log(v)
    //             // console.log((k + 1))
    //         });

    //     }
    // });
</script>

<?= $this->endSection() ?>