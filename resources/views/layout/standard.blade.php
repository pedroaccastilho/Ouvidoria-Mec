<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <form method="post" action={{route('login.sair')}}>
      @csrf
      <input type="submit" name="submit">
    </form>
    @yield('content')
  </body>
</html>
