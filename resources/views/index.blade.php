<!DOCTYPE html>
<html>

<head>
    <title>CRUD Pada Laravel</title>
</head>

<body>
    <h3>Data Pegawai</h3>
    <a href="/pegawai/create"> + Tambah Pegawai Baru</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->name }}</td>
                <td>{{ $p->email }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->id }}">Edit</a>
                    |

                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                        action="{{ route('pegawai.destroy', $p->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger shadow">Delete</button>
                    </form>
                    |

                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
