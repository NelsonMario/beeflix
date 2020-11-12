<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('sass/app.scss')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

</head>
<body>
    <div class="title">BEEFLIX</div>
    <div class="button-container">
    <a href="{{url()->previous()}}" type="button" class="btn btn-dark">Kembali</a>
    <a href="/" type="button" class="btn btn-dark">Lihat Semua Film</a>
    </div>
    <div style="width: 90vw">
        @yield('content')
    </div>
</body>
</html>
