<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
<link rel="stylesheet" href="{{asset(".\css\main.css")}}">
<link rel="stylesheet" href="{{asset(".\css\headerfooter.css")}}">
<link rel="stylesheet" href="{{asset(".\css\login.css")}}">
<link rel="stylesheet" href="{{asset(".\css\modal.css")}}">
<link rel="stylesheet" href="{{asset(".\css\dashboard.css")}}">
<link rel="stylesheet" href="{{asset(".\css\hightcontrol.css")}}">


</head>
<body>

    <section>
        @include('Layout.header')
    </section>

    {{-- Body --}}

    <section>
        @yield('content')
    </section>
    
    {{-- Footer --}}
    <section>
        @include('Layout.footer')
    </section>

   <script src="{{asset(".\js\modal.js")}}"></script>
</body>
</html>
