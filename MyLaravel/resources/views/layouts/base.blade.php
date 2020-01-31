<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employee VS Task</title>
    <link rel="stylesheet" href="{{ mix("css/app.css")}}">
  </head>
  <body>
    <header>
      HEADER
      <br>
      <a href="{{route("employee.create")}}">CREATE NEW Employee</a>
    </header>
      @yield('content')
    <footer>
      FOOTER
    </footer>
  </body>
</html>
