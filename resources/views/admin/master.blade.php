<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>Apna Dental</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="{{ asset('public/assets/img/favicon.ico') }}" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('assets/img/apple-touch-icon-57x57-precomposed.png') }}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="{{ asset('public/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="{{ asset('public/assets/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Main styles -->
  <link href="{{ asset('public/assets/css/admin.css') }}" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="{{ asset('public/assets/css/admin.css') }}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  @include('admin.layouts.header')
  @yield('content')
  @include('admin.layouts.footer')
</body>
</html>
