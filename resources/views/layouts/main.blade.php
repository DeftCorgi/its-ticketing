<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/app.css">
  <title>ITS - Support</title>
</head>
<body>
  <div class="container-fluid">
    @include('partials.navbar')
  </div>
  <main class="container">
    @yield('content')
  </main>
  <div class="container">
    @include('partials.footer')
  </div>
  <script src="js/app.js"></script>
</body>
</html>