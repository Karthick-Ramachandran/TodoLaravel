<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Todos app</title>
</head>
<body>
    <div class="container">
@if(Session::has('success'))

    <div class="alert alert-success mt-3 text-center">{{ Session::get('success')  }}</div>

@endif

        @yield('content')
    </div>
</body>
</html>