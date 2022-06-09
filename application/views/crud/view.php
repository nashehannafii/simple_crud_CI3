<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>Simple CRUD</h1>

    <a href="<?= base_url('/crud/insert') ?>">tambah</a>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Aksi</td>
            <td>Pelanggaran</td>
            <td>Data Pelanggaran</td>
        </tr>
        <?php
        $no = 1;
        foreach ($queryData as $data) {
        ?>

            <tr>
                <td><?= $no ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->email ?></td>
                <td><a href="<?= base_url('/crud/update') ?>/<?= $data->id_crud; ?>">Edit</a>|<a href="<?= base_url('/crud/deleteData') ?>/<?= $data->id_crud?>">Delete</a></td>
                <td><a href="<?= base_url('/crud/pelanggaran') ?>/<?= $data->id_crud?>">Input Pelanggaran</a></td>
                <td><a href="<?= base_url('/crud/data_pelanggaran') ?>/<?= $data->id_crud?>">Cek Pelanggaran</a></td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
</body>

</html>