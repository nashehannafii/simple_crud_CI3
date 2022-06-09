<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>Halaman Edit/Update</h1>

    <form action="<?= base_url('/crud/update_data') ?>" method="post">
        <table>
            <tr>
                <td><input type="hidden" name="id" value="<?= $queryData->id_crud; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?= $queryData->nama; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" value="<?= $queryData->email; ?>"></td>
            </tr>
        </table>
        <button type="submit">Update</button>
    </form>
</body>

</html>