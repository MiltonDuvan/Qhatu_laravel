<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qhatu</title>
    <link rel="stylesheet" href=".././css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

<form  action="{{route('register.store')}}"  method="post">

    {{ csrf_field() }}

    <article id="contenedor">

        <section id="contenedorcentrado">
            <section id="login" class="login">
                <section id="loginform">
                    <label for="usuario">Nombre de usuario</label>
                    <input id="usuario" type="text" name="nombres" placeholder="Usuario" required>

                    <label for="email">tu correo electronico</label>
                    <input id="email" type="email" name="correo" placeholder="email" required>

                    <label for="password">Contraseña</label>
                    <input id="password" type="password" placeholder="Contraseña" name="contraseña" required>

                    <label for="password">Confirmar contraseña</label>
                    <input id="password" type="password" placeholder="Confirma contraseña" name="contraseña" required>
                    <label for="telefono">telefono</label>
                    <input id="telefono" type="text" name="telefono" placeholder="telefono" required>
    
                    
    
                    <label for="edad">edad</label>
                    <input id="edad" type="number" name="edad" placeholder="edad" required>
    
                    <label for="descripcion">descripcion</label>
                    <input id="descripcion" type="text" name="descripcion" placeholder="descripcion" required>
    
                    <label for="calificacion">calificacion</label>
                    <input id="calificacion" type="number" name="calificacion" placeholder="calificacion" required>
      
                    <label for="certificado">certificado</label>
                    <input id="certificado" type="file" name="certificado" placeholder="certificado" required>


                    <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                        <label for="cars">Etnia:</label>
                        <select id="cars" name="etnias_id">
                          <option selected="true" disabled="disabled"> Etnia</option>
                          @foreach ($etnias as $etnia)
                            <option value="{{$etnia->id}}">{{$etnia->nombre}} </option>    
                          @endforeach 
                        </select>  
                    </div>

                    <label>Eres indigena:</label>
                    <section class="hola">
                   <label class="checkbox ">si<input   type="checkbox" id="sicheckbox"></label>
                   <label class="checkbox ">no<input  type="checkbox" id="sicheckbox" ></label></label>
                </section>
                <button title="Ingresar" type="submit" name="Ingresar" href="{{url('/index')}}">Registrarme</button>
                   
            </section>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
