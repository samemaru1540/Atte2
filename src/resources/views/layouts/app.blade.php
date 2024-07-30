<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  @yield('css')
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400&display=swap" rel="stylesheet">
</head>
<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        Atte
      </h1>
      @yield('header')
    </div>
  </header>
  <main>
    @yield('content')
  </main>
  </div>
  <div class="footer">
    <p class="footer">Atte,inc.</p>
  </div>
</body>
</html>