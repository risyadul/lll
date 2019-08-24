<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1</title>
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
    <br><br>
    <div class="container-fluid">
        <form>
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="name" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Tempat Lahir</label>
                    <select class="form-control">
                        <option></option>
                    </select>
            </div>
            <div class="form-group">
                <label for="nama">Tanggal Lahir</label>
                <input type="date" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="nama">No HP</label>
                <input type="name" class="form-control" id="nama">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="alamat">Pendidikan Terakhir</label>
                    <select class="form-control">
                        <option></option>
                    </select>
            </div>
            <div class="form-group">
                <label for="">Agama</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="badge badge-info" for="exampleRadios1">
                        ISLAM
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="badge badge-info" for="exampleRadios1">
                        KRISTEN
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="badge badge-info" for="exampleRadios1">
                        KATOLIK
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="">Hobi</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="badge badge-info" for="defaultCheck1">
                        Programming
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="badge badge-info" for="defaultCheck1">
                        Main Game
                    </label>
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button><br><br>
            </form>
        </form>
    </div>
</body>
</html>