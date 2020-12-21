<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="Admin/css/pak.png" rel="icon">
    <link rel="stylesheet" href="Admin/css/style.css" type="text/css">
    <link rel="stylesheet" href="Admin/css/Dashboard.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>Berita|PT.PAK</title>
</head>
<body >
    <div class="Dashboard">
        <div class="container">
            <ul>
                <li style="float: right"><a class="login" href="/Logout" >Logout</a></li>
                <li style="float: right"><a href="#">|</a></li>
                <li style="float: right"><a href="#">{{Auth()->user()->name}}</a></li>   
            </ul>
        </div>
    </div>
    <header class="header">
        <div class="container">
          <h1>PT.Perhutani Anugerah Kimia</h1>
          <ul>
              <li class="active"><a>Berita</a></li>
          </ul>
        </div>
    </header>
    <div >
        <div class="icon_plus">
            <a href="/Create_berita"><img src="Admin/css/plus.png" style="width: 40px "></a>
            <a href="/History_Berita"><img class="sampah" src="Admin/css/history.jpg" style="width: 40px"></a>
        </div>
        <table>
            <tr>
                <th>Judul Berita</th>
                <th>Tanggal Berita</th>
                <th>Asal Berita</th>
                <th>Artikel Berita</th>
                <th>Gambar Berita</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                @foreach ($data_Berita as $berita)
                <tr>
                 <td style="font-size: 12px">{{Illuminate\Support\Str::of($berita->Judul_berita)->words(3)}}</td>
                 <td style="font-size: 12px">{{$berita->Tanggal_berita}}</td>
                 <td style="font-size: 12px">{{Illuminate\Support\Str::of($berita->Kutipan_berita)->words(3)}}</td>
                 <td>{{Illuminate\Support\Str::of($berita->Artikel_berita)->words(4)}}</td>
                 <td><img src="{{asset('images/'.$berita->gambar_berita)}}" width="100px" height="100px"></td>
                 <td><a href="/EditBerita/{{$berita->id}}"><img src="Admin/css/update.png" style="width: 40px"></a></td>
                 <td><a href="/DeleteBerita/{{$berita->id}}" ><img src="Admin/css/delete.png" style="width: 40px"></a></td>
             </tr>
                @endforeach
            </tr>
        </table>
    </div>
</body>

</html>