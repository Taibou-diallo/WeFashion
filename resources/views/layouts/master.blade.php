<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>weFashion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/offcanvas-navbar/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">






    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    {{-- css navbar --}}
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }


        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/offcanvas.css') }}" rel="stylesheet">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:#66EB9A;">WEFASHION</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">SOLDES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOMMES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FEMMES</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- la partie menu --}}
    <main class="container">

        @yield('contenu')

    </main>


    <div class="b-example-divider"></div>
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>informations</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-4"><a href="#" class="nav-link p-0 text-muted">Mentions légales</a>
                        </li>
                        <li class="nav-item mb-4"><a href="#" class="nav-link p-0 text-muted">Presse</a>
                        </li>
                        <li class="nav-item mb-4"><a href="#" class="nav-link p-0 text-muted">Fabrication</a>
                        </li>

                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>service client</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-4"><a href="#" class="nav-link p-0 text-muted">Contactez-nous</a>
                        </li>
                        <li class="nav-item mb-4"><a href="#" class="nav-link p-0 text-muted">Livraison & Retour
                            </a>
                        </li>
                        <li class="nav-item mb-4"><a href="#" class="nav-link p-0 text-muted">Conditions de
                                vente</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>réseaux sociaux</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-4"><a href="#" class="nav-link p-0 text-muted">facebook</a></li>
                        <li class="nav-item mb-4"><a href="#" class="nav-link p-0 text-muted">instagram</a>
                        </li>
                        <li class="nav-item mb-4"><a href="#" class="nav-link p-0 text-muted">inscrivez vous a
                                notre newsletter</a>
                        </li>

                    </ul>
                </div>

                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Inscrivez vous a notre newsletter</h5>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden"> adresse Email</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2022 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                                height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                                height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24"
                                height="24">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>
            </div> --}}
        </footer>
        <script src="{{ asset('js/bootstrap.bundle.min.j') }}"
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>

        <script src="{{}}asset('js/offcanvas.js"></script>
</body>

</html>
