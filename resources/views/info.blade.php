<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info - laravel</title>
</head>
<body>
  <h1>{{ $title }}</h1>
  <nav class="navbar">
    <ul class="navbar__links">
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
    </ul>
  </nav>
  <ul>
    @foreach ($socials as $social)
      <li>
        <a href="{{ $social['link'] }}">
        {{ $social['name'] }}
        </a>
      </li>
    @endforeach
  </ul>
</body>
</html>