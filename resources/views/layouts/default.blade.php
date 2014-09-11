<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>App Starter</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/flatly/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    @if (Session::has('status'))
      <p class="bg-info">{{ Session::get('status') }}</p>
    @endif

    @yield('content')
  </div>
</body>
</html>