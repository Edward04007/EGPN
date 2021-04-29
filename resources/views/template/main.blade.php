<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>@yield('title')EGPN</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/template.css')}}">
    @stack('css')
    <script src="https://kit.fontawesome.com/8544c965ee.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="root">
        <div class="content">
            <header class="header">
                <span>EGPN</span>
                    <figure>
                        <img/>
                        <figcaption>Jonas Rodrigues</figcaption>
                    </figure>
            </header>
            @yield('content')
        </div>
    </div>
</body>
</html>
