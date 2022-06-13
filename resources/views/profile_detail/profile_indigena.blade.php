<div class="continer-fluid m-0 p-0">
    <x-header />
</div>
<section class="datial-50 container d-flex mt-3|">
    <section class="millitos container col-sm-4 col-lg-5 col-xxl-3">
      <section class="">
        <section>
          <article class="col-xxl-12">
            <h3 class="titlesmd text-uppercase fw-bold">Wilson Jimnez</h3>
          </article>
          <section class="w-100">
            <img class="Im  rounded-circle " src="img/profile_indigena.jpg" alt="Avatar" />
          </section>
          <br />
          <section class="d-flex flex-column flex-wrap">
            <article class="container-fluid ">
              <p class="p">Calificacion: ⭐⭐⭐⭐</p>
              <p class="p">Age: 23</p>
              <p class="p">Etnicity: Guayu</p>
              <p class="p">Ubication: Silvia</p>
              <p class="p">Occupation: Artisan</p>
              <p class="p">Location: Cauca</p>
              <a
                class="text-decoration-none text-uppercase fw-bold border"
                href="#"
              >
                <p class="m-1 flex-wrap">Notificaciones 🔔</p></a
              >
            </article>
          </section>
        </section>


        <article class="text-start m-3">

          <h3 class="titlesmd">CONOCEME</h3>

          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Et
            adipisci ratione suscipit. Animi nobis similique enim assumenda
            ipsum ipsa officia sit. Vero veniam culpa deserunt commodi ducimus
            dolor temporibus minima?
          </p>
          <br />

          <article class="input-group">
            <textarea
              class="form-control"
              aria-label="With textarea"
            ></textarea>
          </article>
        </article>
      </section>
    </section>

    <section class="container justify-content-between">
      <section class="container-fluid ">
        <canvas id="myChart" width="200" height="100"></canvas>
      </section>
      <br />

      <section class="container  d-flex flex-wrap">
        <h3 class="titlesmd text-center">DESEAS SUBIR UNA MANUALIDAD</h3>

        <article class="container flex-wrap  d-flex m-4">
          <section class="container col-lg-7">
            <h6 class="text-uppercase fw-bold mb-4">Sube tus manualidades</h6>
            <p class="text-start  mb-3">
              Dandole click al boton "VENDER" puedes subir tus manualidades o
              artesanias.Te recomendamos fotos de buena calidad para que tu
              producto se venda mas rapido.
            </p>
            <input type="button" name="vender" value="VENDER" />

          </section>


          <section class="container col-lg-5 ">
            <h6 class="text-uppercase fw-bold mb-4">¿Necesitas hacer una subasta?</h6>
            <p class="text-start m-2  mb-3 ">
              Dandole click al boton "SUBASTAR" podras subastar tu mejor
              artesania, recuerda el precio inicial lo pones tu.
            </p>
            <input type="button" name="subastar" value="SUBASTAR" />

          </section>
        </article>
      </section>
    </section>
  </section>
</body>
<script class="script_duvagay">
  var ctx = document.getElementById("myChart").getContext("2d");
  var myChart = new Chart(ctx, {
    type: "line",
    data: {
      labels: [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre",
      ],
      datasets: [
        {
          label: "Ventas por mes",
          data: [10, 9, 22, 15, 72, 50, 45, 87, 80, 70, 50, 98],
          backgroundColor: [
            "rgb(51, 15, 90)",
            "rgb(102, 102, 253)",
            "rgb(230, 0, 0)",
          ],
          borderwidth: 2.5,
        },
      ],
    },
  });
</script>
<div class="container m-0 p-0">
    <x-footer />
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
crossorigin="anonymous"></script>
