<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Selamat Datang di PPDB Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="{{ URL::to('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('node_modules/font-awesome/css/font-awesome.min.css') }}">
  </head>
  <style media="screen">
  body {
    background: url('images/sekul.jpeg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: 'Lato', sans-serif;
  }
  h1,h2 {
    /* margin-top: 70px; */
    color: #fff;
  }
  .panel {
    background-color: #0088cc93;
    text-align: center;
    width: 100%;
    height:100vh;
  }
  .panel img{
    text-align: center;
  }
  .panel a {
    margin-top: 30px;
  }
  .panel p {
    color: #fff;
    padding-top: 50px;
  }
  .daftar a{
    font-size: 1.7em;
    padding: 10px 50px;
  }
  </style>
  <body>

    <div class="container-full">
      <div class="panel">
        <img src="images/dikdas.png" width="300px" height="auto">
          <h1>SELAMAT DATANG PESERTA DIDIK BARU</h1>
          <h2>Penerimaan Peserta Didik Baru</h2>
        <div class="daftar">
            <a href="#" class="btn btn-success">Daftar</a>
        </div>
      </div>

    </div>

    <script src="{{ URL::to('node_modules/jquery/dist/jquery.min.js') }}" charset="utf-8"></script>
    <script src="{{ URL::to('node_modules/bootstrap/dist/js/bootstrap.min.js') }}" charset="utf-8"></script>
  </body>
</html>
