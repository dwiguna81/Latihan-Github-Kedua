<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflect Engineer</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
</head>
<body class="tubuh">
@include('layout.head')

<div>
@yield('content')
</div>


<script src="{{ url('js/jquery.js') }}"></script>
<script src="{{ url('js/popper.js') }}"></script>
<script src="{{ url('js/bootstrap.js') }}"></script>
</body>
</html>