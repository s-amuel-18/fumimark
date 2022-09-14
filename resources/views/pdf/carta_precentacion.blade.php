<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta De presentacion</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />


</head>

<style>
    @page {
        margin: 0cm 0cm;
    }



    body {
        margin-top: 5cm;
        margin-bottom: 5cm;
        font-family: 'Poppins';
    }

    td {
        text-align: center;
        vertical-align: center;
    }

    table {
        width: 100%;
    }

    .mt-2cm {
        margin-top: 1cm
    }

    .mx-2cm {
        margin-left: 2cm;
        margin-right: 2cm;
    }

    .p-1 {
        padding: 1rem;
    }

    .w-100 {
        width: 100%;
    }

    .h-1 {
        font-weight: 900;
        color: rgb(251, 68, 60);

        text-align: center;
        line-height: 0.5;
    }

    .h-1-2 {
        font-size: medium;
    }

    .h-3 {
        font-weight: 200;
        color: rgb(251, 68, 60);
        text-align: center;
        line-height: 0.5;
    }

    .h-5 {
        font-weight: 900;
        color: rgb(251, 68, 60)
    }

    .td-1 {
        width: 60%;
        text-align: justify;

    }

    .td-1-2 {
        width: 35%;

    }

    .td-2 {
        width: 33%
    }

    .td-20px {
        min-width: 20px;
    }


    .page-break {
        page-break-after: always;
    }

    .page-break-before {
        page-break-before: always;
    }

    .page-break-inside {
        page-break-inside: avoid;
    }

    .page-container {
        margin-top: 4.5cm;
        margin-bottom: 5cm;
        height: 100vh;
        width: 100vw;
        display: table;
        text-align: center;
    }

    .center {

        text-align: center;

    }

    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;

    }

    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;

    }

    .bg-img {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 5cm;
        /* background-color: #ffffff; */
        /* background-color: rgb(240, 240, 240); */

    }

    .sq-80 {
        width: 80px;
        height: 80px;
    }

    .logo-fluxel {
        width: 150px;
    }

    .logo-fluxel-h {
        margin-top: -0.5rem;
        padding: 2.5rem;

    }

    .logo-fluxel-f {
        margin-left: 15cm;
        margin-bottom: 1cm;
        padding: 2rem;

    }

    .border-red {
        border: 2px solid red;
    }

    .bg-red {
        background-color: red;
    }





    /* { @page { margin: 100px 25px; }
    header { position: fixed; top: -60px; left: 0px; right: 0px; background-color: lightblue; height: 50px; }
    footer { position: fixed; bottom: -60px; left: 0px; right: 0px; background-color: lightblue; height: 50px; }
    p { page-break-after: always; }
    p:last-child { page-break-after: never; }} */
</style>

<body>
    <header class="bg-img" style="background-image: url({{ public_path('images\pdf_assets\header.png') }});">
        {{-- <div class="logo-fluxel-h"><img class="logo-fluxel" src="{{ public_path('front\img\fumimark_logo.png') }}"
                alt=""></div> --}}
    </header>
    <footer class="bg-img" style="background-image: url({{ public_path('images\pdf_assets\footer.png') }});">

        <div class="logo-fluxel-f">
            {{-- <img class="logo-fluxel" src="{{ public_path('front\img\fumimark_logo_blanco.png') }}" alt=""> --}}
        </div>
    </footer>


    <main class="">
        <section class="mx-2cm" id="intro">
            <div class="">
                <h1 class="h-1">
                    Fumimark
                </h1>
                <h3 class="h-3">
                    Empresa de Fumigacion
                </h3>
            </div>
            <br><br><br>
            <div class="">
                <table class="">
                    <tr>
                        <td class="td-1">
                            <p>Somos una organización especializada en hacer control de plagas a grado
                                industrial, comercial y residencial con elevados estándares de calidad. Garantizamos la
                                satisfacción de nuestros propios consumidores por medio de la implementación de
                                productos certificados, técnicas avanzadas de control y muestreo, con supervisión y
                                monitoreo de todos los componentes que intervienen en el proceso de fumigación.
                                <br>
                            </p>
                        </td>
                        <td class="td-20px"></td>
                        <td class="td-1-2" style="
                        vertical-align: middle!important;">
                            <img src="{{ public_path('front\img\fumimark_logo.png') }}" width="100%">
                        </td>
                    </tr>
                </table>
            </div>
        </section>
        <div class="page-break"></div>

        <section id="proyectos">

            <div class="">
                <h1 class="h-1">
                    Clientes
                </h1>
                <h3 class="h-3">
                    Algunos de nuestros clientes satisfechos
                </h3>
            </div>
            <div class="mx-2cm center">

                <table class="mt-2cm">
                    <tr>
                        <td></td>

                        <td class="">
                            <img class="center" width="200PX" src="{{ public_path('images\pdf_assets\bomberos.jpg') }}"
                                alt="">
                        </td>
                        <td></td>

                    </tr>
                    <tr>
                        <td>
                            <img width="200px" src="{{ public_path('images\pdf_assets\unimet.png') }}" alt="">

                        </td>
                        <td style="width: 200px"></td>
                        <td> <img width="200px" src="{{ public_path('images\pdf_assets\san_jorge.png') }}"
                                alt=""></td>
                    </tr>
                </table>

            </div>
            <br>
            <br>
            {{-- <img src="{{ public_path('images\pdf_assets\paginas.png') }}" width="100%"> --}}
        </section>

        <div class="page-break"></div>
        <section class="mx-2cm" id="actividades">

            <h1 class="h-1">
                Descripción de las actividades <br>
            </h1>
            <h1 class="h-1 h-1-2"> realizadas por FLUXEL-CODE</h1>

            <table class="">
                <tr>
                    <td class="td-1">
                        <div class="">

                            <h4 class="h-5">Desinfección</h4>
                            <p>Consiste en la eliminación de microorganismos patógenos que las plagas introducen a
                                nuestras instalaciones haciendo que los métodos de prevención y protección sean
                                fundamentales, asegurando que gérmenes bacterias, hongos y virus(COVID) no desarrollen a
                                plenitud</p>
                        </div>
                    </td>
                    <td class="td-20px"></td>
                    <td class="td-1">
                        <div class="">
                            <h4 class="h-5">Desinsectación <br> </h4>
                            <p>Consiste en eliminar plagas de insectos dañinos para la salud mediante procedimientos
                                físicos y químicos relacionados con métodos sanitarios para determinar la causa que lo
                                ha provocado.
                            </p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="td-1">
                        <div class="">

                            <h4 class="h-5">Desratización </h4>
                            <p>Es un conjunto de técnicas (análisis, diagnósticos y acción) cuyo fin es desarrollar un
                                plan de control y eliminación de roedores y a su vez determinar un conjunto de técnicas
                                de prevención.</p>
                        </div>
                    </td>
                    <td class="td-20px"></td>
                    <td class="td-1">
                        <div class="">
                            <h4 class="h-5"> Servicio Express </h4>
                            <p>Si tienes una emergencia, ¡llámanos! Por un costo extra, te atendemos de inmediato.</p>


                        </div>
                    </td>
                </tr>
            </table>
        </section>

        <section class="mx-2cm" id="contactanos">
            <div class="page-container page-break-before ">


                <h1 class="h-1">CONTÁCTANOS </h1>
                <br><br>

                <div>
                    <table class="center  w-100">
                        <tr class="">

                            <td class="td-2  ">

                                <img class="sq-80" src="{{ public_path('images\pdf_assets\ws.png') }}" alt="">
                                <br> <br>
                                {{-- <h1 class="h-1 h-1-2">+58 (xxxx) xxx-xx-xx</h1> --}}
                                <h1 class="h-1 h-1-2 ">+58 424-1595718</h1>

                            </td>

                            <td class="td-2 ">

                                <img class="sq-80" src="{{ public_path('images\pdf_assets\instagram.png') }}"
                                    alt="">
                                <br> <br>
                                <h1 class="h-1 h-1-2 ">@fumimark.ca</h1>

                            </td>

                            <td class="td-2 ">

                                <img class="sq-80" src="{{ public_path('images\pdf_assets\gmail.png') }}"
                                    alt="">
                                <br> <br>
                                <h1 class="h-1 h-1-2 ">Fumimarkca@gmail.com</h1>

                            </td>


                        </tr>
                    </table>
                </div>


            </div>

        </section>
    </main>



</body>

</html>
