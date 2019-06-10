<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ouvidoria Mec - Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{url('css')}}/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{url('css')}}/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{url('css')}}/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <div class="center">
          <h2 class="text-center">Ouvidoria Mec</h2>
          <hr>
          <br>
          <form class="text-center border border-light p-5" method="post" action={{route('login.enter')}}>
            @csrf
            <p class="h4 mb-4">Login</p>
            <input type="email" name="email" class="form-control mb-4" placeholder="email@dominio.com">
            <input type="password" name="password" class="form-control mb-4" placeholder="Senha">
            <input type="submit" class="btn btn-info btn-block my-4" value="Enviar"/>
            <button type="reset" class="form-control mb-4">Limpar</button>
          </form>
        </div>
    </div>
  </body>
</html>
