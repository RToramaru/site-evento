<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="icon" href="/img/logo.png" type="image/icon type">

    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">

                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/" class="nav-link">Eventos</a></li>
                    <li class="nav-item"><a href="/events/create" class="nav-link">Criar Evento</a></li>

                    <a href="/" class="navbar-brand"><img src="/img/logo.png" alt="RToramaru Eventos" width="80"></a>
                    @auth
                    <li class="nav-item"><a href="/dashboard" class="nav-link">Meus Eventos</a></li>
                    <li class="nav-item"><form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                    </form></li>
                    @endauth
                    @guest
                    <li class="nav-item"><a href="/login" class="nav-link">Entrar</a></li>
                    <li class="nav-item"><a href="/register" class="nav-link">Cadastrar</a></li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    @if(session('type') == 'delete')
                        <p class="msg-delete">{{ session('msg') }}</p>
                    @else
                        <p class="msg">{{ session('msg') }}</p>
                    @endif
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p>RToramaru Eventos &copy; 2023</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>