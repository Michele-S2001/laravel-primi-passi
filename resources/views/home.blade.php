<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First-steps-laravel</title>
</head>
<body>
  <h1>{{ $title }}</h1>
  <nav class="navbar">
    <ul class="navbar__links">
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('info') }}">Info</a></li>
    </ul>
  </nav>
</body>
</html>