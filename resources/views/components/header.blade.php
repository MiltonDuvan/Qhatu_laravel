<div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qhatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7f3542ed85.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/detail_indigena.css">
    <link rel="stylesheet" href="css/detail_craft.css">
  <!-- duvan-gay -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js"
      integrity="sha512-5m2r+g00HDHnhXQDbRLAfZBwPpPCaK+wPLV6lm8VQ+09ilGdHfXV7IVyKPkLOTfi4vTTUVJnz7ELs7cA87/GMA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    {{-- //DUVA-GAY --}}
</head>

<body>
    <section>
        <header class=" header d-flex flex-column container mw-100  p-0 m-0 pb-2">
            <section class="nav-1-Qhatu nav contaier-fixed  justify-content-between  px-4 mt-2 " id="nav-1-Qhatu">
                <h4 class="fs-5 nav_Qhatu mt-4">Las artesanias del Cauca en tu pantalla!</h2>
                    <h4 class="h1  nav_Qhatu "><a class="nav-link2 nav_Qhatu2 fs-1" href="http://127.0.0.1:8000/">Qhatu</a></h4>
                    <article class="contaier-fixed">
                        <h2 class="fs-5 nav_Qhatu">+57 325 999 90 90</h2>
                        <h2 class="fs-6 nav_Qhatu">Qhatu_Artesanias@gmail.com</h2>
                    </article>
            </section>
            <section class="container d-flex flex-row mw-100  m-0">
                <section class=" d-flex  container pt-4 Titel_qhatu  p-0 m-0">
                    <a href="#" class="nav-link active tt">
                        <h4 class="nav_Qhatu2 d-flex fs-2" id="section">QHATU</h4>
                    </a>
                </section>
                <nav class="navbar navbar-expand-lg  d-flex w-75 justify-content-start">
                    <div class="container-fluid w-100  ">
                        <div class="collapse navbar-collapse justify-content-start" id="navbarNavAltMarkup">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="navbar-nav  d-flex justify-content-evenly w-100">
                                <section class=" d-flex gap-4 justify-content-center w-75">
                                    <a class="nav_Qhatu nav-link active m-0 text-muted" aria-current="page" href="{{url('http://127.0.0.1:8000')}}">
                                        <p class="d-flex p-0 m-0 fs-5">Inicio</p>
                                    </a>
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown">
                                            <a class=" nav-link2 dropdown-toggle fs-5" href="#"
                                                id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Categorias
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-dark"
                                                aria-labelledby="navbarDarkDropdownMenuLink">
                                                <li><a class="dropdown-item" href="#">Tejidos</a></li>
                                                <li><a class="dropdown-item" href="#">Ceramicas</a></li>
                                                <li><a class="dropdown-item" href="#">Accesorios</a></li>
                                                <li><a class="dropdown-item" href="#">Otros</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <a class="nav_Qhatu nav-link active fs-5 text-muted" href="#">
                                        <p class="d-flex p-0 m-0">Contactanos</p>
                                    </a>

                                    <div class="col-rt-3">
                                        <div class="expSearchBox">
                                            <div class="expSearchFrom">
                                                <input id="field" type="text" value="" placeholder="escribe aqui" />
                                                <!--  Search here -->
                                                <div class="close">
                                                    <span class="front"></span>
                                                    <span class="back"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <article class="collapse navbar-collapse w-25 d-flex justify-content-end">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="nav_Qhatu fa-solid fa-circle-user fs-3"></i>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="nav_Qhatu dropdown-item" href="{{route('profile_detail.index')}}">Ajustes</a></li>
                                            <li><a class="nav_Qhatu dropdown-item" href="#">Cambiar de cuenta</a></li>
                                            <li>
                                                <hr class="nav_Qhatu dropdown-divider">
                                            </li>
                                            <li><a class="nav_Qhatu dropdown-item" href="{{url('login')}}">Cerrar session</a></li>
                                        </ul>
                                    </li>
                                    <a class="nav-link " href="#"><i
                                            class="nav_Qhatu fa-solid fa-cart-shopping fs-4"></i></a>


                                </article>

                            </div>
                        </div>
                    </div>

                </nav>
            </section>
            <hr class="nav_Qhatu  border-5 opacity-50 m-0 mx-5 ">
        </header>
        <!-- pongan su codigo a qui -->
        <script type="text/javascript">
            window.addEventListener("scroll", function () {
                var nav_1_Qhatu = document.querySelector("#nav-1-Qhatu");
                nav_1_Qhatu.classList.toggle("abajo3", window.scrollY > 0);
            }
            )
        </script>
        <script type="text/javascript">
            window.addEventListener("scroll", function () {
                var header = document.querySelector("header");
                header.classList.toggle("abajo", window.scrollY > 0);
            }
            )
        </script>
        <script type="text/javascript">
            window.addEventListener("scroll", function () {
                var section = document.querySelector("#section");
                section.classList.toggle("abajo2", window.scrollY > 0);
            }
            )
        </script>
</div>
