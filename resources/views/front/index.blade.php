@extends('front.layouts.app')

@section('content')
    {{-- loader --}}
    @include('front.components.loader')

    <div class="header-top-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-right">
                    <h4 class="m-0 py-3" style="color:#fb443c; border-bottom:1px solid rgba(229,188,139,0.5);">Llamanos al:
                        +58 (414) 317-0373</h4>
                </div>
            </div>
        </div>

        <!--------------Top bar ends here------------------>

        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">

            <div class="container my-3"> <a class="navbar-brand logo" href="#"><img
                        src="{{ asset('front/img/fumimark_logo.png') }}"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                        class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"> <a class="nav-link" href="#">Inicio <span
                                    class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item"> <a class="nav-link" href="#about ">Acerca de nosotros </a> </li>

                        <li class="nav-item"> <a class="nav-link" href="#servicios ">Servicios</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#contact">Contactanos</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="{{ route('login') }} ">Inicio de sesión</a> </li>
                    </ul>

                    {{-- * En este momento no necesitamos el cotizadoe --}}
                    @if (/* $data['services']->count() > 0 */ null)
                        <form class="form-inline ml-3 my-lg-0">
                            <a href="#quoter" class="btn btn-danger font-weight-bold dd2" href="#contact">Solicita una
                                cotizacion</a>
                        </form>
                    @endif
                </div>
            </div>
        </nav>
    </div>
    <!--------------Nav bar ends here------------------>

    <div class="bd-example pt-5" id="">
        <div id="carouselExampleCaptions" class="carousel carousel-fade slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active slide-60vh">
                    <img src="{{ asset('front/img/slide_1.jpg') }}" class="d-block img-cover  h-100 w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><span>Somos</span> Expertos <span>en control de plagas</span></h5>
                        <p>Con años de experiencia <br>
                            ¡Somos la solucion que buscas!</p>
                        <a href="#about"
                            class="btn btn-outline-light align-items-center float-left d-flex text-uppercase dd2">Ver más
                            &nbsp; <i class="lni-arrow-right"></i></a>
                    </div>
                </div>
                <div class="carousel-item slide-60vh"> <img src="{{ asset('front/img/slide-2.jpg') }}"
                        class="d-block img-cover  w-100 slide-60vh" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Maneras seguras<span> de controlar</span></h5>
                        <p>
                            ¡Eliminacion de Plagas alrededor de tu casa!</p>
                        <a href="#about"
                            class="btn btn-outline-light align-items-center float-left d-flex text-uppercase dd2">Ver más
                            &nbsp; <i class="lni-arrow-right"></i></a>
                    </div>
                </div>
                <div class="carousel-item slide-60vh"> <img src="{{ asset('front/img/slide-3.jpg') }}"
                        class="d-block img-cover  w-100 slide-60vh" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><span>¿Preocupado</span> por las plagas?</h5>
                        <p>¡No te preocupes, te ayudaremos! <br>
                            ¡El sistema de control de plagas más rápido! </p>
                        <a href="#about"
                            class="btn btn-outline-light align-items-center float-left d-flex text-uppercase dd2">Ver más
                            &nbsp; <i class="lni-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span
                    class="carousel-control-prev-icon bb" aria-hidden="true"></span> <span class="sr-only">Anterior</span>
            </a> <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon bb" aria-hidden="true"></span> <span
                    class="sr-only">Siguiente</span> </a>
        </div>
    </div>

    <!--------------banner ends here------------------>
    <div class="bg-wrapper" id="about">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-12 col-md-6 mb-3">
                    <div class="text-left section-about-us">
                        <h2> <span>Sobre nosotros</span> Nuestro equipo profesional le brinda el mejor servicio y excelente
                            soporte.
                        </h2>
                        <div class="divider divider-line"></div>
                        <p>Somos especialistas en el control de todo tipo de insectos, desinsectación y desratización, en el
                            área
                            comercial,residencial e industrial.Trabajamos con un sistema de fumigación de manera precisa y
                            optimizada,
                            lo que nos
                            garantiza el control con altos estándares y permite observar resultados inmediatos.
                            <br><br>
                            Aplicamos productos muy seguros para su salud, la de sus trabajadores y familiares.
                        </p>
                        <p>Ayudamos a desarrollar su negocio. Brindamos el mejor servicio que viene con los mejores
                            resultados.</p>
                        <div class="progress-item pt-2">
                            <span class="mb-2 font-weight-bold">Trabajo profesional </span>
                            <span class="progress-count font-weight-bolder mb-2 float-right">100%</span>
                            <div class="progress " style="height: 7px">
                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                    role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                    style="width:100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-right wow animate__fadeInUp d-flex align-self-center justify-content-center "
                    data-wow-duration="2s">
                    <img src="{{ asset('front/img/about-us.png') }}" class="img-fluid w-75" />
                </div>
            </div>
        </div>
    </div>

    <!--------------about section ends here------------------>
    <div class="bg-wrapper-2" id="servicios">
        <div class="container py-5">
            <div class="row pt-4 justify-content-center">
                <div class="col-7 text-center">
                    <div class="section-title section-title-2 wow animate__fadeInUp" data-wow-duration="2s">
                        <h2>Nuestros Servicios</h2>
                        <h3>Nuestros mejores servicios para la salud de su ambiente.</h3>
                        <span class="divider divider-line"></span>
                    </div>
                </div>
            </div>
            <div class="row wow animate__fadeInUp" data-wow-duration="2s">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-3"> <img src="{{ asset('front/img/pest-1.jpg') }}"
                                    class="img-fluid rounded-circle" /> </div>
                            <div class="col-9">
                                <h4>CONTROL DE CUCARACHAS</h4>
                                <p>
                                    Las cucarachas y chiripas permanecen similares a varios peligros para la salud, debido a
                                    que son
                                    portadoras de diferentes bacterias y patologías. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-3"> <img src="{{ asset('front/img/pest-2.jpg') }}"
                                    class="img-fluid rounded-circle" /> </div>
                            <div class="col-9">
                                <h4>CONTROL DE MOSCAS</h4>
                                <p> A diferencia de otros insectos las
                                    patologías transmitidas por las moscas son de manera indirecta debido a que no pican.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-3"> <img src="{{ asset('front/img/pest-3.jpg') }}"
                                    class="img-fluid rounded-circle" /> </div>
                            <div class="col-9">
                                <h4>CONTROL DE AVISPAS</h4>
                                <p>Las avispas tienen la posibilidad de atacar en enorme conjunto si sienten comprometida la
                                    estabilidad
                                    de su nido.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-3"> <img src="{{ asset('front/img/pest-4.jpg') }}"
                                    class="img-fluid rounded-circle" /> </div>
                            <div class="col-9">
                                <h4>CONTROL DE ABEJAS CARPINTERAS</h4>
                                <p> Las abejas carpinteras tienen la posibilidad de perforar casi cualquier madera, sin
                                    embargo
                                    prefieren la madera sin ropa.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-3"> <img src="{{ asset('front/img/pest-5.jpg') }}"
                                    class="img-fluid rounded-circle" />
                            </div>
                            <div class="col-9">
                                <h4>CONTROL DE HORMIGAS</h4>
                                <p>Algunas especies pueden destruir edificios de
                                    madera, y otras pueden picar. </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-3"> <img src="{{ asset('front/img/pest-6.jpg') }}"
                                    class="img-fluid
                                    rounded-circle" /> </div>
                            <div class="col-9">
                                <h4>CONTROL DE TERMITAS</h4>
                                <p> Descomponen la madera. Afectan a nuestras casas, comiendo no solo la
                                    madera sino también a todos sus derivados </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-3"> <img src="{{ asset('front/img/pest-7.jpg') }}"
                                    class="img-fluid rounded-circle" /> </div>
                            <div class="col-9">
                                <h4>CONTROL DE ROEDORES</h4>
                                <p>Tienen alta tasa de reproducción y adaptabilidad al ámbito
                                    los transforman velozmente en una amenaza para diferentes tipos de faenas.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-3"> <img src="{{ asset('front/img/pest-8.jpg') }}"
                                    class="img-fluid rounded-circle" /> </div>
                            <div class="col-9">
                                <h4>CONTROL DE MOSQUITOS</h4>
                                <p> Los mosquitos tienen la posibilidad
                                    de transmitir patologías como el Virus del Nilo Occidental y la malaria o paludismo a
                                    humanos y
                                    animales. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-3"> <img src="{{ asset('front/img/covid2.jpg') }}"
                                    class="img-fluid rounded-circle" /> </div>
                            <div class="col-9">
                                <h4>DESINFECCIÓN</h4>
                                <p>
                                    Estamos debidamente cualificados y certificados para dar los servicios de sanitización
                                    contra Covid-19
                                    (COVID-19)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-4 pt-3  wow animate__fadeInUp" data-wow-duration="2s">
                <div class="offset-md-1 col-md-5 p-2">
                    <a target="_blanck" href="{{ route('pdf.services') }}"
                        class="btn d-block btn-outline-dark text-uppercase font-weight-bold dd2">Descargar lista de
                        servicios
                        <i class="fa fa-file-pdf"></i>
                    </a>
                </div>
                <div class="col-md-5 p-2">
                    <a target="_blanck" href="{{ route('pdf.cartaPresentacion') }}"
                        class="btn d-block btn-outline-danger text-uppercase font-weight-bold dd2">carta de
                        presentación
                        <i class="fa fa-file-pdf"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--------------service badget------------------>
    @if (/* $data['services']->count() > 0 */ null)
        {{-- * En este momento no necesitamos el cotizadoe --}}
        <div class="bg-wrapper-2 py-5" id="quoter">
            <div class="container ">
                <div class="row pt-4 justify-content-center">
                    <div class="col-7 text-center">
                        <div class="section-title section-title-2 wow animate__fadeInUp" data-wow-duration="2s">
                            <h2>Cotización en tiempo real</h2>
                            <h3>¡Solicita una cotizacion del servicio!</h3>
                            <span class="divider divider-line"></span>
                        </div>
                    </div>
                </div>
                <div class="wow animate__fadeInUp" data-wow-duration="2s">
                    @include('front.components.form_quoter')
                </div>

            </div>
        </div>
    @endif


    <!--------------service section ends here------------------>

    <div class="container my-5 pt-3 wow animate__fadeInUp" data-wow-duration="2s" id="testimonios">
        <div class="row">
            <div class="col-12">
                <div class="slider">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="ml-5 mr-5 rr6">
                                <p class="lead text-center rr4">Gracias por el maravilloso servicio que su empresa ha
                                    brindado a mi empresa. Específicamente, en mi oficina había serios problemas de insectos
                                    y su negocio respondió de inmediato y de manera muy profesional. </p>
                                <div class="m-auto" style="width:45px; padding-top:20px; border-bottom:5px solid #fb443c">
                                </div>
                                <h6 class="mt-5 font-weight-bold small">ALEXIS CHAPMAN, DIRECTOR - Venta de maní San Jorge
                                    ca.</h6>
                            </div>
                        </div>
                        {{-- <div class="col-3"><img src="{{ asset('front/img/testi-1.jpg') }}"
                                class="img-fluid rounded-circle" title="Kevin Griswold -  Stylist"></div> --}}
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="ml-5 mr-5 rr6">
                                <p class="lead text-center rr4">Solo quería agradecer de nuevo a Fumimark por un trabajo
                                    bien hecho.
                                    Recibimos nuestro servicio trimestralmente de Fumimark y nunca tenemos un problema que
                                    no se pueda resolver. Y su servicio se ha mantenido con el trascurso de los días.
                                    El ultimo problema que teníamos notamos una afluencia de insectos en la pared de una
                                    cocina cerca de un enchufe. Llamé a Fumimark esta mañana y se programó una visita con el
                                    presupuesto en mano para esa misma tarde.
                                </p>
                                <div class="m-auto" style="width:45px; padding-top:20px; border-bottom:5px solid #fb443c">
                                </div>
                                <h6 class="font-weight-bold small mt-5">ALEXIS CHAPMAN, DIRECTOR - Universidad
                                    Metropolitana</h6>
                            </div>
                        </div>
                        {{-- <div class="col-3"><img src="{{ asset('front/img/testi-2.jpg') }}"
                                class="img-fluid rounded-circle" title="Kevin Griswold -  Stylist"></div> --}}
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="ml-5 mr-5 rr6">
                                <p class="lead text-center rr4">Recomiendo encarecidamente esta empresa. El servicio fue
                                    minucioso, agradable y puntual. El personal de la oficina fue servicial y fácil de
                                    tratar. El precio cotizado era razonable. No dudaría en volver a pedir su ayuda si
                                    surgiera la necesidad.</p>
                                <div class="m-auto" style="width:45px; padding-top:20px; border-bottom:5px solid #fb443c">
                                </div>
                                <h6 class="font-weight-bold small mt-5">ALEXIS CHAPMAN, DIRECTOR - Grupo Hinterlaces, ca
                                </h6>
                            </div>
                        </div>
                        {{-- <div class="col-3"><img src="{{ asset('front/img/testi-2.jpg') }}"
                                class="img-fluid rounded-circle" title="Kevin Griswold -  Stylist"></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------testimonial section ends here------------------>

    <div class="bg-counter py-5 ">
        <div class="container py-5">
            <div id="counter" class="row">
                <div class="col-12 col-lg-4 pb-3 text-center">
                    <div class="counter-value" data-count="2">1</div>
                    <h5 class="font-weight-normal text-black-50">Años de experiencia</h5>
                </div>
                <div class="col-12 col-lg-4 pb-3 text-center">
                    <div class="counter-value" data-count="10">110</div>
                    <h5 class="font-weight-normal text-black-50">Clientes felices</h5>
                </div>
                <div class="col-12  col-lg-4 pb-3 text-center">
                    <div class="counter-value" data-count="1569"></div>
                    <h5 class="font-weight-normal text-black-50">Plagas eliminadas</h5>
                </div>
            </div>
        </div>
    </div>

    <!--------------counter section ends here------------------>

    <div class="bg-yello mt-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="cta-image"> <img src="{{ asset('front/img/img-cta.png') }}" class="img-fluid" /> </div>
                </div>
                <div class="col-md-6 align-items-center d-flex flex-row">
                    <div>
                        <h4 class="text-white font-italic" style="font-family:Georgia, 'Times New Roman', Times, serif;">
                            ¿Tiene
                            alguna duda?</h4>
                        <h2 class="text-white font-weight-bold">NO DUDE EN CONTACTARNOS EN CUALQUIER MOMENTO. </h2>
                    </div>
                </div>
                <div class="col-md-3 align-items-center d-flex"> <a target="_blank"
                        href="https://api.whatsapp.com/send?phone=584241595718"
                        class="btn btn-outline-light w-100 text-uppercase font-weight-bold dd2">Contactanos &nbsp; <i
                            class="lni-arrow-right"></i></a> </div>
            </div>
        </div>
    </div>
    <!--------------Call to action section ends here------------------>

    <div class="main-footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-box d-flex align-items-center justify-content-start">
                        <div class="icon-box "> <i class="lni-phone-handset"></i> </div>
                        <div class="info-text">
                            <h6>Llamanos ahora!</h6>
                            <h4><a class=" text-white " target="_blank"
                                    href="https://api.whatsapp.com/send?phone=584241595718">+58 424-1595718
                                </a> </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box d-flex align-items-center justify-content-start">
                        <div class="icon-box"> <i class="lni-alarm-clock"></i> </div>
                        <div class="info-text">
                            <h6>Nuestro horario es:</h6>
                            <h4>Lunes - viernes 08:00 - 18:00</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box d-flex align-items-center justify-content-start">
                        <div class="icon-box"> <i class="lni-envelope"></i> </div>
                        <div class="info-text">
                            <h6>¿Necesita ayuda? Envíanos un correo electrónico</h6>
                            <h4>fumimarkca@gmail.com</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row py-3 d-flex justify-content-between">
                <div class="col-md-4 col-sm-6 ">
                    <div class="footer-logo-wrapper">
                        <div class="footer-logo"> <a href="#"><img
                                    src="{{ asset('images/logo/fumimark_logo_blanco.svg') }}" alt=""></a>
                        </div>
                        <div>
                            <p>Podemos llegar a cualquier sitio en 1 o 2 días. Nuestro equipo bien equipado es capaz de
                                lograr
                                cualquier
                                tarea. Estamos a solo una llamada de distancia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h4>Acerca de nosotros</h4>
                        <div style="width:45px; border-bottom:2px solid #fb443c"></div>
                        <ul>
                            <li>Control de plagas residencial</li>
                            <li>Control comercial de plagas</li>
                            <li>Prevención de plagas</li>
                            <li><a target="_blank" href="https://api.whatsapp.com/send?phone=584241595718">Contáctenos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="footer-social">
                        <div class="footer-contact">
                            <h4>Contactanos</h4>
                            <div style="width:45px; border-bottom:2px solid #fb443c"></div>
                            <ul>
                                <li> <a target="_blank" href="https://api.whatsapp.com/send?phone=584241595718"> Whatsapp:
                                        +58 424-1595718
                                    </a> </li>
                                <li> Esq. Gradillas a San Jacinto, Av Este 2, Caracas 1012, Distrito Capital </li>
                                <li><a target="_blank" href="mailto:Fumimarkca@gmail.com">Email: fumimarkca@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <h4>Social Media</h4>
                        <div style="width:45px; border-bottom:2px solid #fb443c"></div>
                        <ul class="social-list">
                            <li> <a target="_blank" href="https://www.facebook.com/FumiMark-101895685288655/"><i
                                        class="lni-facebook-filled"></i></a> </li>
                            <li><a target="_blank" href="https://www.instagram.com/fumimark.ca"><i
                                        class="lni-instagram"></i></a></li>
                            <li><a target="_blank" href="mailto:Fumimarkca@gmail.com"><i class="lni-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---------------Footer section ends here --------------------->

    <div class="container">
        <div class="row py-3">
            <div class="col-md-4 text-center text-md-left py-1 small dd"> <a href="#">Política de privacidad</a> -
                <a target="_blank" href="https://api.whatsapp.com/send?phone=584241595718">Contactanos </a>
            </div>
            <div class="col-md-8 text-center text-md-right py-1 small dd"> © Fumimark. Todos los derechos
                Reservado. <a target="#" href="">Fumimark.com</a> </div>
        </div>
    </div>

    <!---------------Copyright section ends here --------------------->

    <!---------------modal quoter --------------------->
    @include('front.components.modal_quoter')
    @include('front.components.btn-fixed')
    @include('front.components.modal_ads')
@endsection

@push('js')
    <script>
        const appData = @json($data['js']);
        const services = document.getElementById("services");
        const meters = document.getElementById("meters");
        const total_pay = document.getElementById("total_pay");
        const httpGetQuoter = appData["httpGetQuoter"];
        const http_send_mail = appData["http_send_mail"];
        const budget_email = document.getElementById("budget_email");
        const budget_name = document.getElementById("budget_name");
    </script>

    <script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-validation/localization/messages_es.min.js') }}"></script>
    <script src="{{ asset('js/Plugins/axios.min.js') }}"></script>
    <script src="{{ asset('js/Plugins/clipboard.min.js') }}"></script>
    <script src="{{ asset('js/services/functions.js') }}"></script>
    <script src="{{ asset('front/js/services_quoter.js') }}"></script>
    <script src="{{ asset('js/services/services.js') }}"></script>
    <script src="{{ asset('js/services/validate.js') }}"></script>
@endpush
