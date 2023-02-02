<!DOCTYPE html>
<html>

<head>
    <title>Membuat CRUD Pada Laravel</title>
</head>

<body>

    <h3>Edit pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $p->id }}"> <br /> <br />
            Nama <input type="text" required="required" name="name" value="{{ $p->name }}"> <br /> <br />
            Email <input type="text" required="required" name="email" value="{{ $p->email }}"> <br /> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach


</body>

</html>
