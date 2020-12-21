<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin/css/Admin.css" type="text/css">
    <link  href="Admin/css/pak.png" rel="icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>History-Kegiatan|PT.PAK</title>
</head>
<body>
    <div class="history_kegiatan">
        <h1>History Data Kegiatan</h1>
    </div>
    <div class="tombol_berita">
        <div class="kembali_dashboard">
            <form action="/View_kegiatan">
                <button class="btn_kegiatan">Tabel Konten kegiatan</button>
            </form>
        </div>
    </div>
    <table class="table_history">
        <tr>
            <th>Tanggal Hapus</th>
            <th>Jam Hapus</th>
            <th>Judul Kegiatan</th>
            <th>Delete Data</th>
        </tr>
       @foreach ($kegiatan as $kegiatan)
       <tr>
        <td>{{$kegiatan->deleted_at->format('d/m/y')}}</td>
        <td>{{$kegiatan->deleted_at->format('00:00')}}</td>
        <td>{{$kegiatan->judul_kegiatan}}</td>
        <td><a href="/Berita/hapus_permanen">Hapus Data Permanen</a></td>
    </tr>
       @endforeach
    </table>
</body>
</html>