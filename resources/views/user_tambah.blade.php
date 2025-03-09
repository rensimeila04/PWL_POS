<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah User</title>
</head>

<body>
    <h1>Form Tambah Data User</h1>
    <form method="post" action="{{ url('/user/tambah_simpan') }}">
        {{ csrf_field() }}

        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Masukan Username"><br><br>

        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" placeholder="Masukan Nama"><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Masukan Password"><br><br>

        <label for="level_id">Level ID</label><br>
        <input type="number" name="level_id" id="level_id" placeholder="Masukan ID Level"><br><br>

        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>

</html>
