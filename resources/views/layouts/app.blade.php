<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.header')

    @if(Request::is('/'))
      @include('inc.hero')
    @endif

    <div class="container mt-5">
      @include('inc.messages')
      <div class="row">
        <div class="col-8">
              @yield('content')
        </div>
        <div class="col-4">
              @include('inc.side_panel')
        </div>
      </div>
    </div>
    @include('inc.footer')
  </body>
</html>
