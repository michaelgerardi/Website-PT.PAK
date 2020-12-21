<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="Admin/css/pak.png" rel="icon">
    <link rel="stylesheet" href="Admin/css/Dashboard.css" type="text/css">
    <link rel="stylesheet" href="Admin/css/style.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>History-Berita|PT.PAK</title>
</head>
<body>
    <div class="Dashboard">
        <div class="container">
            <ul>
                <li style="float: right"><a class="login" href="/Logout" >Logout</a></li>
                <li style="float: right"><a href="#">|</a></li>
                <li style="float: right"><a href="#">{{Auth()->user()->name}}</a></li>   
            </ul>
        </div>
    </div>
    <div class="history_berita">
        <h1>History Data Berita</h1>
    </div>
    <div class="back_tombol">
        <a href="/View_berita"><img src="Admin/css/back.png" style="width: 40px" ></a>
    </div>
    <table class="table_history">
        <tr>
            <th>Tanggal Hapus</th>
            <th>Jam Hapus</th>
            <th>Judul Berita</th>
            <th>Restore Data</th>
            <th>Delete Data</th>
        </tr>
       @foreach ($Berita as $berita)
       <tr>
        <td>{{$berita->deleted_at->format('d/m/y')}}</td>
        <td>{{$berita->deleted_at->format('00:00')}}</td>
        <td>{{$berita->Judul_berita}}</td>
        <td><a href="/Kembalikan/{{$berita->id}}" class="btn btn-success btn-sm">Restore Data</a></td>
        <td><a href="/Berita/hapus_permanen" class="btn btn-danger btn-sm">Hapus Data Permanen</a></td>
    </tr>
       @endforeach
    </table>
</body>
</html>