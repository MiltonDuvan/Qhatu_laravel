<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <article class="article">

        <h1 class=" text-lg-center ">detalle compra</h1>
        <section class=" text-lg-center container w-25 ">


            

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
                iusto dicta consequuntur, repellat dolor rem recusandae aut libero, neque,
                earum quae sit ab hic deleniti facere
                inventore! Incidunt, quasi dolorem!</p>
            <section class="position-relative m-4">
                <article class="progress" style="height: 1px;">
                    <section class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></section>
                </article>
                <button type="button"
                    class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill"
                    style="width: 2rem; height:2rem;">1</button>
                <button type="button"
                    class="position-absolute top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill"
                    style="width: 2rem; height:2rem;">2</button>
                <button type="button"
                    class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill"
                    style="width: 2rem; height:2rem;">3</button>
            </section>

        </section>
        <article class="formato border   shadow-lg p-3  bg-body rounded-5 container ">
            <h2 class="justify-content-start ">Billing Adress</h2>

            <section class=" container d-flex m-2  ">
                <section class="container m-2">

                    <article class="text-start ">
                        <label>nombre</label>
                        <input type="email" class=" n form-control" aria-describedby="emailHelp">
                    </article>
                    
                    <article class="text-start ">
                        <label>province</label>
                        
                        <select class=" n form-control ">
                           
                            <option>cali</option>
                            <option>popayan</option>
                            <option>bogota</option>
                            <option>medellin</option>
                            <option>santander</option>
                            <option>rosas</option>   
                        </article>
                        </select>
                    <article class="text-start ">
                        <label>zip</label>
                        <select class="selec n form-control">
                           
                            <option>200</option>
                            <option>100</option>
                            <option>300</option>
                            <option>400</option>
                            <option>500</option>
                            <option>600</option>
                        </select>
                    </article>
                </section>

                <section class="container ">

                    <article  class="text-start ">

                        <label class="form-label m-1">last name</label>
                        <input type="email" class=" n form-control" aria-describedby="emailHelp">

                    </article>
                    <article class="text-start ">
                        <label>city</label>
                        <select class=" n form-control">
                            <option>cali</option>
                            <option>popayan</option>
                            <option>bogota</option>
                            <option>medellin</option>
                            <option>santander</option>
                            <option>rosas</option>
                        </select>
                    </article>
                    <article  class="text-start ">
                        <label>numero</label>
                        <select class=" n form-control">
                            
                            <option>12</option>
                            <option>36</option>
                        </select>
                    </article>
                </section>

            </section>
            <section class=" container  m-4">
               
                
                <input type="checkbox"><label>my billing and shipping andress are the same</label>
            </section>
                <section class=" container  m-4">
                <input  type="checkbox"><label>my billing and shipping andress are the same</label>
            </section>

            <section class="  text-lg-center container">
                <button class="btn-btn" type="button">Next-></button>
            </section>
        </article>
    </article>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
<form class="container d-flex justify-content-end d-flex justify-content-around">