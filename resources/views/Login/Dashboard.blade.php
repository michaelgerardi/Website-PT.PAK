<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="Admin/css/style.css" type="text/css">
  <link rel="stylesheet" href="Admin/css/Dashboard.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
  <title>Document</title>
</head>
<body>
  <div class="Dashboard">
    <div class="container">
        <ul>
            <li><a href="#">PT.Perhutani Anugerah Kimia</a></li>
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
  
</body>
</html>