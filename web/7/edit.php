<?
require "conn.php";

$id = $_GET['id'];

$sql = mysqli_query($conn, "SELECT * FROM users WHERE id_user ='$id'");
$query_user = mysqli_fetch_assoc($sql);
$query_cities = mysqli_query($conn, "SELECT * FROM cities");
$query_hobbies = mysqli_query($conn, "SELECT * FROM hobbies");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1</title>
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
    <br><br>
    <div class="container-fluid">
        <form>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="name" class="form-control" id="nama" value="<?= $query_user['full_name'] ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Tempat Lahir</label>
                    <select class="form-control">
                        <? foreach($query_cities as $city) : ?>
                        <option><?= $city['name'] ?></option>
                        <? endforeach ?>
                    </select>
            </div>
            <div class="form-group">
                <label for="nama">Tanggal Lahir</label>
                <input type="date" class="form-control" id="nama" value="<?= $query_user['date_of_birth'] ?>">
            </div>
            <div class="form-group">
                <label for="nama">No HP</label>
                <input type="name" class="form-control" id="nama" value="<?= $query_user['phone_number'] ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3"><?= $query_user['address'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Pendidikan Terakhir</label>
                    <select class="form-control">
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="">Agama</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="religion" id="religion1" value="ISLAM" checked>
                    <label class="badge badge-info" for="religion">
                        ISLAM
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="religion" id="religion1" value="KRISTEN" checked>
                    <label class="badge badge-info" for="religion">
                        KRISTEN
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="religion" id="religion1" value="KATOLIK" checked>
                    <label class="badge badge-info" for="religion">
                        KATOLIK
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Hobi</label>
                <? foreach($query_hobbies as $hobbies) : ?>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="badge badge-info" for="defaultCheck1">
                        <?= $hobbies['name_hobby'] ?>
                    </label>
                </div>
                <? endforeach ?>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button><br><br>
            </form>
        </form>
    </div>
</body>
</html>