<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{asset('front/styles/bootstrap.rtl.min.css')}}">
     <link rel="stylesheet" href="{{asset('front/styles/style.css')}}">
     <title>وب سایت شخصی حامد شعبانی </title>
</head>

<body>
@include('front.nav');
@include('front.home');
@include('front.blogs');
@include('front.skill');
@include('front.footer');











     <script src="{{asset('front/js/bootstrap.js')}}"></script>
</body>

</html>
