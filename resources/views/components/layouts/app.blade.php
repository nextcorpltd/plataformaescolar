<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        @filamentStyles


         <!-- Libs CSS -->
        <link rel="stylesheet" href="{{ asset("assets/libs/bootstrap-icons/font/bootstrap-icons.min.css") }}" />
        <link rel="preconnect" href="../../../fonts.googleapis.com/index.html" />
        <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin />
        <link href="../../../fonts.googleapis.com/css2ea5d.css?family=Schibsted+Grotesk:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset("assets/libs/%40fortawesome/fontawesome-free/css/all.min.css") }}" />
        <link rel="stylesheet" href="{{ asset("assets/fonts/feather/feather.css") }}" />
        <link rel="preconnect" href="../../../fonts.googleapis.com/index.html" />
        <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin />
        <link href="../../../fonts.googleapis.com/css20310.css?family=DM+Serif+Display:ital@0;1&amp;display=swap" rel="stylesheet" />

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset("assets/css/theme.min.css") }}">

        <link rel="shortcut icon" href="{{ asset("images/logo.png") }}" type="image/x-icon">
    </head>

    <body class="antialiased">
        <header>
            <nav  class="navbar navbar-expand-lg navbar-default fixed-top border-top border-primary navbar-dark">
                <!-- navigation start -->
                <div class="container">
                    <a class="navbar-brand @@brandLogo" href="/">
                        <img style="height: 40px;" src="{{ asset("images/logo.png") }}" alt="" /></a>
                    <button
                        class="navbar-toggler collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbar-default"
                        aria-controls="navbar-default"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-default">
                        <button
                            class="navbar-toggler collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbar-default"
                            aria-controls="navbar-default"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <i class="fas fa-times"></i>
                        </button>
                        <ul class="navbar-nav ms-auto me-lg-3">
                            <li class="nav-item dropdown disabled">
                                <a class="nav-link d-lg-none" href="#">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/" id="menu-1" >Início</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="menu-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quem somos</a>
                                <ul class="dropdown-menu dropdown-menu-arrow dropdown-menu-xl-start" aria-labelledby="menu-3">
                                    <li>
                                        <a class="dropdown-item" href="/quem-somos">O Intituto</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Estrutura Organizacional </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Infraestrutura</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cursos/graduacao" id="menu-1" >Graduação</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/cursos/pos-graduacao" id="menu-1" >Pós-Graduação</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="menu-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Vida Acadêmica</a>
                                <ul class="dropdown-menu dropdown-menu-arrow dropdown-menu-xl-start" aria-labelledby="menu-3">
                                    <li>
                                        <a class="dropdown-item" href="/biblioteca">Biblioteca</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/repositorio">Repositório </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route("posts") }}" id="menu-1" >Notícias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route("events") }}" id="menu-1" >Eventos</a>
                            </li>
                        </ul>
                        <div class="header-btn">
                            <a href="#" class="btn btn-primary btn-sm">Portal do Aluno</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        {{ $slot }}
        <footer class="footer pt-11 pb-3 bg-dark text-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4">
                            <h4 class="mb-4 text-white">Institucional</h4>
                            <ul class="list-unstyled list-group">
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Quem somos</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Infraestrutura</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Cursos</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Contactos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4">
                            <h4 class="mb-4 text-white">Novidades</h4>
                            <ul class="list-unstyled list-group">
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Notícias</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Eventos</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Biblioteca</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Repositórios</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4">
                            <h4 class="mb-4 text-white">Acessos</h4>
                            <ul class="list-unstyled list-group">
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Portal do aluno</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Portal do docente</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-6">
                        <div class="mb-4">
                            <h4 class="mb-4 text-white">Conecte-se</h4>
                            <ul class="list-unstyled list-group">
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Instagram</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">Facebook</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">LinkedIn</a></li>
                                <li class="list-group-item"><a href="#" class="list-group-item-link">YouTube</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12">
                        <div class="mb-4">
                            <h4 class="mb-4 text-white">Assine a nossa newsletter</h4>
                            <div>
                                <p>Receba novidades de atualizações em seu e-mail.</p>
                                <form class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label class="form-label visually-hidden" for="footerFormEmail">E-mail</label>
                                        <input type="email" class="form-control border-white" id="footerFormEmail" placeholder="Endereço de e-mail" required />
                                        <div class="invalid-feedback">Por favor, informe o seu e-mail.</div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Assinar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mt-8">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    Copyright ©
                                    <span id="copyright">

                                        <script>
                                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()));
                                        </script>
                                    </span>
                                    -
                                </li>
                                <li class="list-inline-item"><a href="#" class="text-reset">Políticas de Privacidade</a></li>
                                <li class="list-inline-item"><a href="#" class="text-reset">Termos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        @filamentScripts


        <!-- end of footer -->
        <script src="{{ asset("assets/js/vendors/validation.js") }}"></script>

        <!-- Optional JavaScript -->

        <!-- Libs JS -->
        <script src="{{ asset("assets/libs/jquery/dist/jquery.min.js") }}"></script>
        <script src="{{ asset("assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
        <script src="{{ asset("assets/libs/jquery-slimscroll/jquery.slimscroll.min.js") }}"></script>

        <!-- Theme JS -->
        <script src="{{ asset("assets/js/theme.min.js") }}"></script>

        <script src="{{ asset("assets/js/vendors/validation.js") }}"></script>
    </body>
</html>
