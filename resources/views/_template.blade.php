<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FANIG INGENEERING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha383-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri3tjfHxaWutUpFmBp3vmVor" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
    {{-- _menu --}}
<style>
    .menu {
        background: rgb(255,255,255);
        color: #929292;
    }
</style>
{{-- /_menu --}}

</head>

<body class="bg-light">
    
        {{-- menu --}}
        <header>
            @include('_menu')
        </header>
        {{-- /menu --}}

        {{-- Background-Caroussel --}}
        @yield('contenu')
        {{-- /Background-Caroussel --}}

        
        {{-- contact --}}
        @yield('contact')
        
        
        {{-- footer --}}
       <footer>
           @include('_footer')
        </footer> 
    {{-- formulaire d'inscription des employees --}}
    
    {{-- formulaire d'inscription des employees --}}





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha383-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
