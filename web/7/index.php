<?
require "conn.php";

$sql = "SELECT * FROM users JOIN cities ON users.place_of_birth_id = cities.id JOIN users_hobbies ON users.id_user = users_hobbies.biodata_id JOIN hobbies ON users_hobbies.hobby_id = hobbies.id
";
$query = mysqli_query($conn, $sql);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">List Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th>Nama Lengkap</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Pendidikan Terakhir</th>
                <th>Agama</th>
                <th>Hobi</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <? $i = 1 ?>
                <? foreach($query as $data) : ?>
                <tr>
                    <th scope="row"><?= $i++?></th>
                    <td><?= $data['full_name']?></td>
                    <td><span class="badge badge-info"><?= $data['name']?></span></td>
                    <td><?= $data['date_of_birth']?></td>
                    <td><?= $data['phone_number']?></td>
                    <td><?= $data['address']?></td>
                    <td><span class="badge badge-info"><?= $data['last_education']?></span></td>
                    <td><span class="badge badge-info"><?= $data['religion']?></span></td>
                    <td><span class="badge badge-info"><?= $data['name_hobby']?></span></td>
                    <td><a href="edit.php?id=<?=$data['id_user']?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?id=<?=$data['id_user']?>" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                <?endforeach?>
            </tbody>
        </table>
    </div>
</body>
</html>