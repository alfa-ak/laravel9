<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Data Pegawai</h3>
    <a href="/pegawai">Kembali</a>
    <br />
    <br />
    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="name" required="required"><br /><br />
        Email <input type="text" name="email" required="required"><br /><br />
        {{-- No Telp <input type="text" name="notelp" required="required"><br /><br />
        Alamat <input type="text" name="alamat" required="required"><br /><br /> --}}
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>
