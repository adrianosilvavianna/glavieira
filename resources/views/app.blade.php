<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    {{-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174961856-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-174961856-1');
    </script> --}}


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{-- <meta name="keywords" content="favicon, favicon generator, favorite icons, browser icon"> --}}
    
    <title>Glavieira</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <meta name="description" content="Com influências que vão de Jazz a MPB, o Glavieira traz uma experiência única repleta de uma serena sinceridade">
    {{-- <meta name="google" content="nositelinkssearchbox" /> --}}
    <meta name="robots" content="Glavieira, Studio, Giovana, Pereira, Adriano, Vianna, Jazz, Soul, Brasil Song, Sintonia, cover, Mpb, voz e violao, homestudio, musica Curitibana, Curitiba, Brasil, Gla, eira">
    <meta name="googlebot" content="all">
    <meta name="google" content="nositelinkssearchbox" />
    <meta name="google" content="notranslate" />


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    {{-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> --}}
    
    <!-- Place favicon.ico in the root directory -->
    
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/audioplayer.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .float-wpp{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .my-float-wpp{
            margin-top:16px;
        }    
    </style>

    
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->

    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="/">
                                        <img src="img/logo.png" style="width: 160px" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li>
                                                <a href="/" class="active" >Início</a>
                                            </li>
                                            <li>
                                                <a href="/repertory" >Repertório</a>
                                            </li>
                                            <li>
                                                <a href="/about">Sobre</a>
                                            </li>
                                            <li>
                                                <a href="/contact">Contato</a>
                                            </li>
                                            <li >
                                                <a href="/#contribuir">
                                                    <i class="fa fa-handshake-o" style="font-size: 17px" aria-hidden="true"></i>  
                                                    Como contribuir
                                                </a>
                                            </li>
                                                              
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="social_icon text-right">
                                    <ul>
                                        <li><a href="https://www.facebook.com/glavieirastudio" target="_blank"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="https://open.spotify.com/artist/5IJweJv5ihDVbpuK8WNl7z?si=9WJEMPk0RaaiU5w8rrbdMQ" target="_blanck"> <i class="fa fa-spotify"></i> </a></li>
                                        <li><a href="https://www.instagram.com/glavieira_studio/" target="_blanck"> <i class="fa fa-instagram" ></i> </a></li>
                                        <li><a href="https://www.youtube.com/channel/UCtNsuArvgXidmAiLQLR9Wdw" target="_blanck"> <i class="fa fa-youtube-play"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </header>
    <!-- header-end -->

    

    @yield('content')

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                        Quer ser nosso parceiro?
                                    </h3>
                                <div class="subscribe-from">
                                    <form id="subscribeForm" action="/subscribe" method="post">
                                            <input type="text" name="_token" id="_token" value="{{ csrf_token() }}" hidden>
                                            <input type="text" name="email" placeholder="Digite seu e-mail">
                                            <input type="number" name="number" placeholder="(DDD)9999-99999">
                                            <input type="text" name="link" placeholder="Link de uma rede social ou site ">
                                            <button type="submit" >Enviar</button>
                                        </form>
                                </div>
                                    <p class="sub_text">Caso tenha interesse em propor uma parceria conosco, deixe seu e-mail, telefone e o link da sua página (Site/Blog/Rede Social) que entraremos em contato o mais rápido possível.</p>
                                </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                                <h3 class="footer_title">
                                        Entre Em Contato
                                </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        glavieirastudio@gmail.com
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        +55 (041) 99555-8643 |
                                        +55 (041) 99702-0390
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com.br/maps/place/Curitiba+-+PR/@-25.4956847,-49.4273678,11z/data=!3m1!4b1!4m5!3m4!1s0x94dce3f5fc090ff1:0x3c7a83b0092bb747!8m2!3d-25.4808762!4d-49.3044253">
                                        Brasil - Curitiba - PR
                                    </a>
                                </li>
                            </ul>
                            <div class="">
                                <div class="social_icon ">
                                    <ul>
                                        <li style="font-size: 30px">
                                            <a href="https://www.instagram.com/glavieira_studio/" target="_blank"> <i class="fa fa-instagram"></i> </a>
                                            <a  href="https://www.facebook.com/glavieirastudio" target="_blank"> <i class="fa fa-facebook"></i> </a>
                                            <a href="https://open.spotify.com/artist/5IJweJv5ihDVbpuK8WNl7z?si=9WJEMPk0RaaiU5w8rrbdMQ" target="_blank"> <i class="fa fa-spotify"></i> </a>  
                                            <a href="https://www.youtube.com/channel/UCtNsuArvgXidmAiLQLR9Wdw" target="_blank"> <i class="fa fa-youtube-play"></i> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-7 col-md-6">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Somos o Glavieira Studio, muito obrigado pela sua visita!! <i class="fa fa-heart-o" aria-hidden="true"></i> </a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="footer_links">
                            <ul>
                                <li><a href="/">Início</a></li>
                                <li><a href="/contact">Contato</a></li>
                                <li><a href="/repertory">Repertório</a></li>
                                <li >
                                    <a href="/#contribuir">
                                        <i class="fa fa-handshake-o" style="font-size: 17px" aria-hidden="true"></i>  
                                        Como contribuir
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <!--/ footer end  -->

   

    <!-- link that opens popup -->

    <!-- JS here -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous">
    </script>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/audioplayer.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="js/main.js"></script>
    
		<script>
                $(function() {
                    $('audio').audioPlayer({

                    });
                });
                var dados_Nu = document.getElementById("dados_Nu");
                var dados_IC = document.getElementById("dados_IC");
                dados_Nu.style.display = "none";
                dados_IC.style.display = "none";

                function showDataNu() {
                        var btn_verDados_Nu = document.getElementById("btn_verDados_Nu");
                        btn_verDados_Nu.style.display = "none";
                        dados_Nu.style.display = "block";
                    }

                function showDataIC() {
                    var btn_verDados_IC = document.getElementById("btn_verDados_IC");
                    btn_verDados_IC.style.display = "none";
                    dados_IC.style.display = "block";
                }
                
                function showDataMP() {
                    console.log('teste');
                    swal("Qual valor da sua doação?", {
                        buttons: {
                            glavi_15: {
                                text: "R$15",
                                value: "glavi_15"
                            },
                            glavi_30: {
                                text: "R$30",
                                value: "glavi_30",
                            },
                            glavi_60: {
                                text: "R$60",
                                value: "glavi_60"
                            },
                            glavi_120: {
                                text: "R$120",
                                value: "glavi_120"
                            },
                            cancelar: true
                        },
                        })
                        .then((value) => {
                        switch (value) {
                        
                            case "glavi_15":
                                window.open('https://mpago.la/1rJSkkt')
                                swal("Maravilha!", "Você será redirecionado para pagina do Mercado Pago!", "success");
                                break;      

                            case "glavi_30":
                                window.open('https://mpago.la/268exMr')
                                swal("Maravilha!", "Você será redirecionado para pagina do Mercado Pago!", "success");
                            break;

                            case "glavi_60":
                                window.open('https://mpago.la/1Pj4BnW')
                                swal("Maravilha!", "Você será redirecionado para pagina do Mercado Pago!", "success");
                            break;

                            case  "glavi_120":
                                window.open('https://mpago.la/2UcmYoJ')
                                swal("Maravilha!", "Você será redirecionado para pagina do Mercado Pago!", "success");
                            break;
                            
                            default:
                                swal("Não se limite a valores, nós aceitamos qualquer valor por outras formas de pagamento. <3");
                            
                        }
                    });
                }

        </script>
            {{-- botao flutuante whattsapp --}}
            <a href="https://api.whatsapp.com/send?phone=5541997020390." class="float-wpp" target="_blank">
                <i class="fa fa-whatsapp my-float-wpp"></i>
</body>

</html>