<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Estrategias Educativas - @yield('title')</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('css/style.css') }}'>
    <link href="https://fonts.googleapis.com/css2?family=Paprika&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <div class="content">

        <!------------------------------Creacion De Titulo----------------------------------------->
        <header>
            <div class="title">
                <h1>The Title</h1>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <!------------------------------Creacion Del Menu-------------------------------------------->
            <div class="menu">
                <nav>
                    <ul>
                        <li class="menu_li_Active"><a href="{{ route('index') }}">Navbar</a></li>
                        <li><a href="{{ route('post') }}">Publicaciones</a></li>
                        <li><a href="{{ route('content') }}">Contenido Didactico</a></li>
                        <li><a href="{{ route('gallery') }}">Galeria</a></li>
                        <li><a href="{{ route('shop') }}">Tienda</a></li>
                    </ul>
                </nav>
            </div>
            <!------------------------------Imagen Del Header------------------------------>
            <div class="img_header">
                <img src="{{ asset('img/Header.jpg') }}">
            </div>
        </header>
        @yield('content')
        <!------------------------------Elavoracion Del Footer------------------------------>
        <footer class="footer">
            <p>Design Made By @Aurora_Core In 2021</p>
        </footer>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
