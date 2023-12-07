<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info - laravel</title>
</head>
<body>
  <h1>{{ $title }}</h1>
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