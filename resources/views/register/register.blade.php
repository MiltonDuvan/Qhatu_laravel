<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <article id="contenedor">

        <section id="contenedorcentrado">
            <section id="login" class="login">
                <form id="loginform">
                    <label for="usuario">Nombre de usuario</label>
                    <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>

                    <label for="email">tu correo electronico</label>
                    <input id="email" type="email" name="usuario" placeholder="email" required>




                    <label for="password">Contraseña</label>
                    <input id="password" type="password" placeholder="Contraseña" name="password" required>



                    <label for="password">Confirmar contraseña</label>
                    <input id="password" type="password" placeholder="Confirma contraseña" name="password" required>

                    <label>Eres indigena:</label>
                    <section class="hola">
                   <label class="checkbox ">si<input   type="checkbox" id="sicheckbox"></label>
                   <label class="checkbox ">no<input  type="checkbox" id="sicheckbox" ></label></label>
                </section>

                    <a title="Ingresar" name="Ingresar" href="{{url('register_indigena')}}">Registrarme</a>
                </form>

            </section>
            <article id="derecho">
                <section class="titulo">
                    Bienvenido a Qhatu
                </section>
                <hr>
                <article class="pie-form">
                    <a href="{{url('login')}}">¿Ya tienes una cuenta? inicia session</a>
                    <hr>
                    <section class="login_red_social">
                        <h2>Registrate con:</h2>
                        <section class="login-items">
                          <button class="fb"><i class="fab fa-facebook-f"></i> Registrarse  con Facebook</button>
                          <button class="tw"><i class="fab fa-twitter"></i> Registrarse  con Twitter</button>
                          <button class="correo"><i class="fas fa-envelope"></i> Registrarse con Correo</button>
                        </section>
                    </section>
                    <a href="{{url('http://127.0.0.1:8000')}}">« Volver</a>
                    </article>


            </article>
        </section>
    </article>
</body>
</html>
