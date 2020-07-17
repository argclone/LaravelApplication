<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BackupSys</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body>
  <div class="container">
    @yield('content')
  </div>
  <script src="{{ asset('js/jquery.js') }}" type="text/js"></script>
  <script src="{{ asset('js/bootstrap.js') }}" type="text/js"></script>
</body>
</html>