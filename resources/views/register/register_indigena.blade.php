<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register_indigena.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <article id="contenedor">

        <section id="contenedorcentrado">
            <section id="login">
                <form id="loginform">
                    <label for="usuario">Nombres completos</label>
                    <input id="usuario" type="text" name="usuario" placeholder="Usuario" required>

                    <label for="cedula">cedula</label>
                    <input id="cedula" type="cedula" name="cedula" placeholder="cedula" required>

                    <label for="Direccion">Direccion</label>
                    <input id="Direccion" type="email" name="Direccion" placeholder="direccion" required>

                    <label for="Etnia">Etnia </label>
                    <select>
                        <option></option>
                        <option>Yanaconas</option>
                      <option>Ingas</option>
                      <option>Kokonucos</option>
                      <option>Totoroes</option>
                      <option>Paeces</option>
                      <option>Guambianos</option>
                      <option>Eperara</option>
                      <option>Siapidara</option>

                    </select>



                    <a title="Ingresar" name="Ingresar" href="{{url('http://127.0.0.1:8000')}}">Registrarme</a>
                </form>

            </section>
            <article id="derecho">
                <section class="titulo">
                    Bienvenido a Qhatu
                </section>
                <hr>
                <article class="pie-form">
                    <a href="../incio session/session.html">¿Ya tienes una cuenta? inicia session</a>

                    <hr>
                    <section class="login_red_social">
                        <h2>Registrate con:</h2>
                        <section class="login-items">
                          <button class="fb"><i class="fab fa-facebook-f"></i> Registrarse  con Facebook</button>
                          <button ton class="tw"><i class="fab fa-twitter"></i> Registrarse  con Twitter</button>
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
