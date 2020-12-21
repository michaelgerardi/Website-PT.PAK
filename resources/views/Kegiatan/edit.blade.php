<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Admin/css/Admin.css')}}" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="{{route('ProsesEditKegiatan',['id'=>$data_kegiatan->id])}}" method="GET" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Judul Kegiatan :</label>
            <div class="col-sm-10">
            <input name="judul_kegiatan"type="text" class="form-control" id="email" placeholder="Judul Berita" value="{{$data_kegiatan->judul_kegiatan}}">
            </div>
        </div>
        <div class="form-group">
                <label class="control-label col-sm-2" for="email">Tanggal Kegiatan :</label>
                <div class="col-sm-10">
                <input name="tanggal_kegiatan" type="date" class="form-control" id="email">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Isi Kegiatan :</label>
            <div class="col-sm-10">
            <textarea name="isi_kegiatan" class="form-control" id="email" placeholder="isi kegiatan" rows="5" value="{{$data_kegiatan->isi_kegiatan}}">
                </textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">gambar Kegiatan :</label>
            <div class="col-sm-10">
                <input name="gambar" type="file" class="form-control" id="email" >
                <img src="{{URL::to('/')}}/images/{{$data_kegiatan->gambar}}">
            <input type="hidden" name="hidden_gambar" value="{{$data_kegiatan->gambar}}">
            </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Submit</button>
            </div>
          </div>
    </form>
</body>
</html>