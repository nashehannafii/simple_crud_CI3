<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>Input Pelanggaran</h1>

    <form action="<?= base_url('/crud/insert_data_pelanggaran') ?>" method="post">
        <table>
            <tr>
                <td><input type="hidden" name="id" value="<?= $data->id_crud; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $data->nama; ?></td>
            </tr>
            <tr>
            <td>jenis Pelanggaran</td>
                <td>:</td>
                <td>
                    <select name="pelanggaran" id="pelanggaran" pleaceholder="Test">
                        <option value="Terlambat">Terlambat</option>
                        <option value="Lupa">Lupa</option>
                        <option value="Kabur">Kabur</option>
                    </select>
                </td>
            </tr>

        </table>
        <button type="submit">Save</button>
    </form>
</body>

</html>