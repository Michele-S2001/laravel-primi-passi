<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - laravel</title>
</head>
<body>
  <h1>{{ $title }}</h1>
  <nav class="navbar">
    <ul class="navbar__links">
      <li><a href="{{ route('info') }}">Info</a></li>
      <li><a href="{{ route('home') }}">Home</a></li>
    </ul>
  </nav>
  <p>Ciao! Mi chiamo {{ $name }}</p>
</body>
</html>