<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaPHP</title>
    <link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <nav class="blue darken-4">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><i class="material-icons">store_mall_directory</i>LaTiendaPHP</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Productos</a></li>
        <li><a href="badges.html">Pedidos</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    @yield('contenido')
  </div>
  <script src="{{ asset('materialize/js/materialize.js') }}"></script>
</html>