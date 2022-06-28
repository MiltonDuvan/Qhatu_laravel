
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qhatu</title>
    <link rel="stylesheet" href="css/register_indigena.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <form  action=""{{route('register_indigena.store')}} method="post">

        {{ csrf_field() }}
        <article id="contenedor">
    
            <section id="contenedorcentrado">
                <section id="login">
                    <form id="loginform">
                        <label for="telefono">telefono</label>
                        <input id="telefono" type="text" name="telefono" placeholder="telefono" required>
    
                        <label for="certificado">certificado</label>
                        <input id="certificado" type="file" name="certificado" placeholder="certificado" required>
    
                        <label for="edad">edad</label>
                        <input id="edad" type="number" name="edad" placeholder="edad" required>
    
                        <label for="descripcion">descripcion</label>
                        <input id="descripcion" type="text" name="descripcion" placeholder="descripcion" required>
    
                        <label for="calificacion">calificacion</label>
                        <input id="calificacion" type="number" name="calificacion" placeholder="calificacion" required>
    
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
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
