
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Qhatu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/7f3542ed85.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/session.css">
    </head>
<article id="contenedor">
    <section id="contenedorcentrado">
        <section id="login">
            <form id="loginform">
                <label for="usuario">Usuario</label>
                <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>

                <label for="password">Contraseña</label>
                <input id="password" type="password" placeholder="Contraseña" name="password" required>

                <button type="submit" title="Ingresar" name="Ingresar">Login</button>
            </form>

        </section>
        <article id="derecho">
            <section class="titulo">
                Bienvenido a Qhatu
            </section>
            <hr>
            <section class="pie-form">
                <a href="#">¿Perdiste tu contraseña?</a>
                <a href="{{url('register/create')}}">¿No tienes Cuenta? Registrate</a>
                <hr>
                <section class="login_red_social">
                    <h2>Iniciar session con:</h2>
                <section class="login-items">
                    <button class="fb"><i class="fab fa-facebook-f"></i> Acceder  con Facebook</button>
                    <button class="tw"><i class="fab fa-twitter"></i> Acceder con Twitter</button>
                    <button class="correo"><i class="fas fa-envelope"></i> Acceder con Correo</button>
                </section>
                </section>
                <a href="../index.html.html">« Volver</a>
            </section>
        </article>
    </section>
</article>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
crossorigin="anonymous"></script>
