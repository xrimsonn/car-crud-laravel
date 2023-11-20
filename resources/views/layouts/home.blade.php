<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
  <title>@yield('title')</title>
</head>

<body>
  <main class="container">
    <nav>
      <ul>
        <li><strong>Test app</strong></li>
      </ul>
      <ul>
        <li><a href="{{ route('home.index') }}">Home</a></li>
        <li><a href="{{ route('home.about') }}">About us</a></li>
        <li><a href="{{ route('home.contact') }}">Contact us</a></li>
      </ul>
    </nav>
    <article style="margin: 0px;">
      @yield('content')
    </article>
  </main>
  @yield('scripts')
</body>

</html>
