<div class="container m-0 p-0">
    <x-header />
</div>

<section class="fondo cuerpo_index">
    <section class=" container-fluid d-flex flex-wrap">
        <article class="col-12  col-md-6  col-xxl-6 ">
            <h1>Artesanias Indigenas</h1>
            <h2>Descubre los tesoros artesanales escondidos en el cauca</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit saepe laboriosam iure voluptatibus
                hic rem, cupiditate provident ex sapiente debitis fugiat, vel deserunt earum ipsa quam distinctio, aut
                maiores excepturi?
                Dignissimos blanditiis mollitia consectetur expedita deserunt aspernatur ipsa, fuga ab tempora obcaecati
                fugiat repudiandae atque! Doloremque, laborum! Odio iusto quis dolore voluptate earum soluta, sapiente
                sit, distinctio aliquid porro laudantium?
                Nisi, impedit. Voluptatibus impedit consequuntur, illum laudantium nam commodi porro cumque, sequi
                explicabo rem saepe quisquam omnis vel asperiores dicta alias! Cupiditate at officiis ipsam provident
                maxime corrupti unde earum!
                Autem nisi veritatis nobis illum. Blanditiis officia ipsa placeat numquam at suscipit sunt fuga et animi
                maxime veniam expedita dolorem maiores illo atque deleniti ut, asperiores natus hic eius inventore.
            </p>
        </article>
        <section id="carouselExampleControls" class="carrusel carousel slide col-12  col-md-6  col-xxl-6"
            data-bs-ride="carousel">
            <article class="carousel-inner">
                <article class="carousel-item active">
                    <img src="img/Fondo1.jpg" class="d-block w-100" alt="img" height="400px" width="400px">
                </article>
                <article class="carousel-item">
                    <img src="img/Fondo2.jpg" class="d-block w-100" alt="img" height="400px" width="400px">
                </article>
                <article class="carousel-item">
                    <img src="img/Fondo3.png" class="d-block w-100" alt="img" height="400px" width="400px">
                </article>
                <article class="carousel-item">
                    <img src="img/Fondo4.png" class="d-block w-100" alt="img" height="400px" width="400px">
                </article>
            </article>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>
    </section>

    <section class="container-fluid d-flex  justify-content-evenly row row-cols-4">
        <ul class="product-list grid-products equal-container">
            <section class="d-flex justify-content-between">
                @foreach ($artesanias as $artesanias)
                <li>
                    <a href="{{ url('detail_craft') }}"class=" card p-4 pt-5 mt-5 shadow-lg p-3 mb-5 rounded-4 text-decoration-none"
                    style="width: 22rem;">
                    @foreach ($imagens as $imagen)
                    <img src="{{$imagen->imagen}}" class="card-img-top" alt="img" height="300"
                        width="200">
                    @endforeach
                    <article class="card-body">
                        <section class="d-flex justify-content-between">
                                <h5 class="card-title">{{ $artesanias->nombre }}</h5>
                                <img class="member-avatar rounded-circle" src="{{ $artesanias->imagen }}" height="40"
                                    width="40">
                        </section>
                        <h6 class="text-success"> $ {{$artesanias->precio }}</h6>
                    </article>
                </a>
                </li>
                @endforeach

        </ul>
        {{-- <a href="{{ url('detail_craft') }}"class=" card p-4 pt-5 mt-5 shadow-lg p-3 mb-5 rounded-4 text-decoration-none"
            style="width: 22rem;">
            <img src="https://placeimg.com/640/480/arch" class="card-img-top" alt="img" height="300"
                width="200">
            <article class="card-body">
                <section class="d-flex justify-content-between">
                    @foreach ($artesanias as $artesanias)
                        <h5 class="card-title">{{ $artesanias->nombre }}</h5>
                        <img class="member-avatar rounded-circle" src="{{ $artesanias->imagen }}" height="40"
                            width="40">
                </section>
                <h6 class="text-success"> $ {{$artesanias->precio }}</h6>
                @endforeach
            </article>
        </a> --}}









    <br>
    <section>
        <x-footer />
    </section>
</section>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>
