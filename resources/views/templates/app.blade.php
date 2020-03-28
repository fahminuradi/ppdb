<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPDB Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="{{ URL::to('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('node_modules/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('node_modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('ppdb/css/custom.css') }}">
  </head>
  <body>

    <div class="container">
      @yield('content')
    </div>

    <script src="{{ URL::to('node_modules/jquery/dist/jquery.min.js') }}" charset="utf-8"></script>
    <script src="{{ URL::to('node_modules/bootstrap/dist/js/bootstrap.min.js') }}" charset="utf-8"></script>
    <script src="{{ URL::to('node_modules/select2/dist/js/select2.min.js') }}" charset="utf-8"></script>
    <script src="{{ URL::to('node_modules/jquery-form-validator/form-validator/jquery.form-validator.min.js') }}" charset="utf-8"></script>
    <script src="{{ URL::to('node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" charset="utf-8"></script>
    <script src="{{ URL::to('ppdb/js/custom.js') }}" charset="utf-8"></script>
  </body>
</html>
