<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin/css/Admin.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Kegiatan|PT.PAK</title>
</head>
<body class="tabel_kegiatan">
    <h2>Data Tabel Konten Kegiatan</h2>
    <section>
        <div class="tombol_berita">
            <div class="tambah_berita">
                <form action="/Create_kegiatan">
                    <button >Tambah Data</button>
                </form>
            </div>
        </div>
        <div class="tombol_berita">
            <div class="tambah_berita">
                <form action="/History_Kegiatan">
                    <button >History </button>
                </form>
            </div>
        </div>
        <div class="tombol_berita">
            <div class="kembali_dashboard">
                <form action="/Dashboard">
                    <button class="nambah">Ke Dashboard</button>
                </form>
            </div>
        </div>
    </section>
    <table >
        <tr>
            <th>Judul Kegiatan</th>
            <th>Tanggal Kegiatan</th>
            <th>Jam Kegiatan</th>
            <th>isi Kegiatan</th>
            <th>Poster Kegiatan</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($data_kegiatan as $kegiatan)
        <tr>
            <td>{{$kegiatan->judul_kegiatan}}</td>
            <td>{{$kegiatan->tanggal_kegiatan}}</td>
            <td>{{$kegiatan->jam_kegiatan}}</td>
            <td>{{$kegiatan->isi_kegiatan}}</td>
            <td><img src="{{asset('images/'.$kegiatan->gambar)}}" width="100px" height="100px"></td>
            <td><a href="/Editkegiatan/{{$kegiatan->id}}">Edit</a></td>
            <td><a href="/Deletekegiatan/{{$kegiatan->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
