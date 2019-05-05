<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <form method="post" action={{route('menu.button')}}>
      @csrf
      <input type="submit" name="home" value="Home">
      @if(Auth::user()->isAdm)
        <input type="submit" name="cadastrarUsuario" value="Cadastrar usuario">
        <input type="submit" name="cadastrarAdmin" value="Cadastrar admin">
      @endif
      <input type="submit" name="logout" value="Logout">
    </form>
    @yield('content')
  </body>
</html>
