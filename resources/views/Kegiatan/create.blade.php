<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Admin/css/Admin.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="form_kegiatan">
        <h1>Masukan Data Kegiatan</h1>
        <div class="garis_kegiatan"></div>
        <form action="/Kegiatan/Create" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group has-feedback{{$errors->has('judul_kegiatan') ? 'has-error' : ''}}" >
                <label class="control-label col-sm-2" for="email" >Judul Kegiatan : </label>
                <div class="col-sm-10">
                  <input name="judul_kegiatan"type="text" class="form-control" id="email" placeholder="Judul Kegiatan">
                  @if ($errors->has('judul_kegiatan'))
                        <span class="help-block">
                            <p style="color: red">{{$errors->first('judul_kegiatan')}}</p>
                        </span>
                  @endif
                </div>
            </div>
            <div class="form-group {{$errors->has('tanggal_kegiatan')? 'has-error':''}}">
                <label class="control-label col-sm-2" for="email">Tanggal Kegiatan :</label>
                <div class="col-sm-10">
                  <input name="tanggal_kegiatan"type="date" class="form-control" id="email" placeholder="Judul Kegiatan">
                </div>
            </div>
            <div class="form-group {{$errors->has('jam_kegiatan')? 'has-error':''}}">
                <label class="control-label col-sm-2" for="email">Jam Kegiatan :</label>
                <div class="col-sm-10">
                    <input name="jam_kegiatan"type="time" class="form-control" id="email" placeholder="Judul Kegiatan">
                </div>
            </div>
            <div class="form-group {{$errors->has('isi_kegiatan')? 'has-error':''}}">
                <label class="control-label col-sm-2" for="email">Isi Kegiatan :</label>
                <div class="col-sm-10">
                    <textarea name="isi_kegiatan" class="form-control" id="email" placeholder="Kutipan Berita" rows="5">
                    </textarea>
                </div>
            </div>
            <div class="form-group {{$errors->has('gambar')? 'has-error':''}}">
                <label class="control-label col-sm-2" for="email">gambar Kegiatan :</label>
                <div class="col-sm-10">
                    <input name="gambar" type="file" class="form-control" id="email" placeholder="Kutipan Berita" rows="10">
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Save</button>
                </div>
              </div>
        </form>
        <form action="/View_kegiatan">
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Back To Table</button>
              </div>
          </form>
    </div>
    
</body>
</html>