<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="{{url('makanan')}}">Home</a></li>
        <li><a href="{{url('makanan/create')}}">Create Product</a></li>
    </ul>
    @yield('content')
</body>
</html>