<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah User</title>
</head>

<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>

    <form method="post" action="{{ url('user/ubah_simpan/' . $data->user_id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Masukan Username"
            value="{{ $data->username }}"><br>

        <label for="nama">Nama</label><br>
        <input type="text" name="nama" id="nama" placeholder="Masukan Nama" value="{{ $data->nama }}"><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Masukan Password"
            value="{{ $data->password }}"><br>

        <label for="level_id">Level ID</label><br>
        <input type="number" name="level_id" id="level_id" placeholder="Masukan ID Level"
            value="{{ $data->level_id }}"><br><br>

        <input type="submit" class="btn btn-success" value="Ubah">
    </form>
</body>

</html>
