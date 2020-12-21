<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Admin/css/Admin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('Admin/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
    <form action="{{route('ProsesEditBerita',['id'=> $data_Berita->id])}}" method="GET" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Judul Berita :</label>
            <div class="col-sm-10">
            <input name="Judul_berita" type="text" class="form-control" id="email" placeholder="Judul Berita" value="{{$data_Berita->Judul_berita}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Tanggal Berita :</label>
            <div class="col-sm-10">
            <input name="Tanggal_berita" type="date" class="form-control" id="email" placeholder="Judul Berita" value="{{$data_Berita->Tanggal_berita}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Kutipan Berita :</label>
            <div class="col-sm-10">
            <input name="Kutipan_berita"type="text" class="form-control" id="email" placeholder="Judul Berita" value="{{$data_Berita->Kutipan_berita}}">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Artikel Berita:</label>
            <div class="col-sm-10">
            <textarea name="Artikel_berita"  class="form-control" id="email" placeholder="isi kegiatan" rows="5" value="{{$data_Berita->Artikel_berita}}">
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">gambar Berita :</label>
            <div class="col-sm-10">
                <input name="gambar_berita" type="file" class="form-control" id="email" >
                <img src="{{URL::to('/')}}/images/{{$data_Berita->gambar_berita}}">
            <input type="hidden" name="hidden_gambar" value="{{$data_Berita->gambar_berita}}">
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
    </form>
    <form action="/View_berita">
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Back To Table</button>
          </div>
      </form>
</body>
</html>