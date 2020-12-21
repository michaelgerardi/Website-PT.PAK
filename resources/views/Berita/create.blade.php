<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="Admin/css/Admin.css" type="text/css">
  <link rel="stylesheet" href="Admin/css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
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
  <div class="form_berita">
    <h1>Masukan Data Berita</h1>
    <div class="garis_berita"></div>
    <form action="/Berita/Create" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group has-feedback{{$errors->has('Judul_berita') ? 'has-error' : ''}}">
        <label class="control-label col-sm-2" for="email">Judul Berita :</label>
        <div class="col-sm-10">
        <input name="Judul_berita"type="text" class="form-control" id="email" placeholder="Judul Berita" value="{{old('Judul_berita')}}">
          @if ($errors->has('Judul_berita'))
                        <span class="help-block">
                            <p style="color: red">{{$errors->first('Judul_berita')}}</p>
                        </span>
          @endif
        </div>
      </div>
      <div class="form-group has-feedback{{$errors->has('Tanggal_berita') ? 'has-error' : ''}}">
        <label class="control-label col-sm-2" for="email">Tanggal Berita :</label>
        <div class="col-sm-10">
        <input name="Tanggal_berita"type="date" class="form-control" id="email" placeholder="Tanggal Berita" value="{{old('Tanggal_berita')}}">
          @if ($errors->has('Tanggal_berita'))
          <span class="help-block">
              <p style="color: red">{{$errors->first('Tanggal_berita')}}</p>
          </span>
         @endif
        </div>
      </div>
      <div class="form-group has-feedback{{$errors->has('Kutipan_berita') ? 'has-error' : ''}}">
        <label class="control-label col-sm-2" for="email">Kutipan Berita :</label>
        <div class="col-sm-10">
        <input name="Kutipan_berita" type="text" class="form-control" id="email" placeholder="Kutipan Berita" value="{{old('Kutipan_berita')}}">
          @if ($errors->has('Kutipan_berita'))
          <span class="help-block">
              <p style="color: red">{{$errors->first('Kutipan_berita')}}</p>
          </span>
         @endif
        </div>
      </div>
      <div class="form-group has-feedback{{$errors->has('Artikel_berita') ? 'has-error' : ''}}">
        <label class="control-label col-sm-2" for="email">Artikel Berita :</label>
        <div class="col-sm-10">
        <textarea name="Artikel_berita" class="form-control" id="email" placeholder="Kutipan Berita" rows="10" value="{{old('Artikel_berita')}}">
          </textarea>
          @if ($errors->has('Artikel_berita'))
          <span class="help-block">
              <p style="color: red">{{$errors->first('Artikel_berita')}}</p>
          </span>
         @endif
        </div>
      </div>
      <div class="form-group has-feedback{{$errors->has('gambar_berita') ? 'has-error' : ''}}">
        <label class="control-label col-sm-2" for="email">gambar Kegiatan :</label>
        <div class="col-sm-10">
        <input name="gambar_berita" type="file" class="form-control" id="email" placeholder="Kutipan Berita" rows="10" value="{{old('gambar_berita')}}">
            @if ($errors->has('gambar_berita'))
            <span class="help-block">
                <p style="color: red">{{$errors->first('gambar_berita')}}</p>
            </span>
           @endif
        </div>
    </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Save</button>
        </div>
      </div>
    </form>
    <form action="/View_berita">
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Back To Table</button>
        </div>
    </form>
  </div>
</body>
</html>