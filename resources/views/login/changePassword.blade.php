<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
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
          @if(Auth::user()->email_verified_at == null)
          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading"><strong>Ola {{Auth::user()->name}}! </strong></h4>
            <hr>
            <p>Vejo que é seu primeiro acesso! Para continuar você precisa escolhar uma senha!</p>
          </div>
          @endif
          <form class="text-center border border-light p-5" method="post" action={{route('login.saveNewPassword')}}>
            @csrf
            <p class="h4 mb-4">Alterar Senha</p>
            <input type="password" id="password" name="password" class="form-control mb-4" placeholder="Senha">
            <input type="password" id="confirm_password" class="form-control mb-4" placeholder="Confirmar senha">

            <input type="submit" class="btn btn-info btn-block my-4" value="Enviar"/>
          </form>
        </div>
    </div>
    <script type="text/javascript">
      var password = document.getElementById("password")
        , confirm_password = document.getElementById("confirm_password");

      function validatePassword(){
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("As senhas devem ser iguais.");
        } else {
          confirm_password.setCustomValidity('');
        }
      }

      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
    </script>
  </body>
</html>
