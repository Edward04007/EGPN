<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'/>
    <meta name='viewport' content='width=device-width, initial-scale=1'/>
    {{-- Padrão --}}
    <meta name="image" content="https://i.imgur.com/bGsKWUm.png"/>
    <meta name="description" content="Teste seu conhecimento de forma rápida com o EGPN"/>
    <meta name="author" content="Éverton - Ed"/>
    <meta name="copyright" content="© 2021 EGPNT"/>
    <meta name="url" content="https://ed-egpn-jonas.herokuapp.com"/>
    {{-- Facebook --}}
    <meta property="og:image" content="https://i.imgur.com/bGsKWUm.png"/>
    <meta property="og:description" content="Teste seu conhecimento de forma rápida com o EGPN"/>
    <meta property="og: url" content="https://ed-egpn-jonas.herokuapp.com"/>
    {{-- Twitter --}}
    <meta name="twitter:image" content="https://i.imgur.com/bGsKWUm.png"/>
    <meta name="twitter:description" content="Teste seu conhecimento de forma rápida com o EGPN"/>
    <meta name="twitter:url" content="https://ed-egpn-jonas.herokuapp.com"/>
    <title>@yield('title') EGPN</title>
   {{--  <link rel='manifest' href='{{asset('ed-manifest.json')}}'> --}}
    <link rel="icon" sizes="144x144" href="https://i.imgur.com/p9uL54S.png"/>
    <link rel="icon" sizes="128x128" href="https://i.imgur.com/Vs4R6IY.png"/>
    <link rel="icon" sizes="96x96" href="https://i.imgur.com/HTQNXaV.png"/>
    <link rel="icon" sizes="64x64" href="https://i.imgur.com/r0iwHCV.png"/>
    <link rel="icon" sizes="48x48" href="https://i.imgur.com/BU50BU5.png"/>
    <link rel="icon" sizes="32x32" href="https://i.imgur.com/Tkg3Z14.png"/>
    <link rel="icon" sizes="16x16" href="https://i.imgur.com/fLhw5IR.png"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,500&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{mix('css/template.css')}}"/>
    @stack('css')
    @stack('js')
    <script src="https://kit.fontawesome.com/8544c965ee.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="root">
        <div class="content">
            <header class="header">
                <span>EGPN</span>
                @if(session('UsuarioLogado') == true)
                    <figure>
                        <a href="{{Route('deslogar')}}"><img src="{{session('foto')}}"/></a>
                        <figcaption>{{session('UsuarioLogado')}}</figcaption>
                    </figure>
                @endif
            </header>
            @yield('content')
        </div>
    </div>
</body>
</html>
