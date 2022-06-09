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

    <a href="<?= base_url('') ?>">back</a>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Stambuk</td>
            <td>Pelanggaran</td>
            <td>Aksi</td>
        </tr>
        <?php
        $no = 1;
        foreach ($data as $data) {
        ?>

            <tr>
                <td><?= $no ?></td>
                <td><?= $data['id_crud'] ?></td>
                <td><?= $data['pelanggaran'] ?></td>
                <td><a href="<?= base_url('/crud/deletePelanggaran') ?>/<?= $data['id_pelanggaran']?>">Delete</a></td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
</body>

</html>