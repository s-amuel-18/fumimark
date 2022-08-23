<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de servicios</title>
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

    table {
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;

    }

    td,
    tr,
    th {
        text-align: center;
        vertical-align: center;
        border: solid 1px rgb(248, 248, 248);

    }


    th {
        padding: 0.4cm;
        background-color: rgb(240, 240, 240)
    }

    td {
        padding: 0.4cm;
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
        line-height: 1;
    }

    .h-1-2 {
        font-size: medium;
    }

    .h-3 {
        font-weight: 200;
        color: rgb(251, 68, 60);
        text-align: center;
        line-height: 1;
        margin-bottom: 1cm;
    }

    .h-5 {
        font-weight: 900;
        color: rgb(251, 68, 60);
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
        margin-top: 7cm;
        margin-left: 15cm;
        margin-right: 3cm;
        padding: 2.5rem;

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
            {{-- <img class="logo-fluxel" src="{{ public_path('front\img\fumimark_logo.png') }}" alt=""> --}}
        </div>
    </footer>


    <main class="">
        <section class="mx-2cm" id="intro">
            {{-- <br><br><br><br><br><br><br><br><br><br> --}}
            <div class="">
                <h1 class="h-1">
                    Cotizacion
                </h1>
                <h3 class="h-3">
                    El presupuesto de la fumigacion a contratar de acuerdo los metros cuadrados del local
                </h3>
            </div>
            <div class="">
                <table class="mx-5cm">

                    <thead>
                        <tr>
                            <th>Servicio </th>
                            <th>Precio</th>
                            <th>Por Metro</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($data['services'] as $serv)
                            <tr>
                                <td>
                                    {{ $serv['name'] }}
                                </td>

                                <td>
                                    {{ $serv['price'] }}$

                                </td>
                                <td>

                                    {{ $serv['service_with_meter'] }}
                                </td>
                                <td>

                                    {{ $serv['price_with_meters_requested_format'] }}$
                                </td>

                            <tr>
                        @endforeach


                    </tbody>
                    <tfoot class="">
                        <td></td>
                        <td></td>
                        <td><Strong>Total:</Strong></td>
                        <td><Strong>{{ $data['total_pay_format'] }}</Strong></td>
                    </tfoot>
                </table>
            </div>
        </section>
        {{-- <div class="page-break"></div> --}}


    </main>



</body>

</html>
