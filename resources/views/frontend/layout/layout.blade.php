<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" >
        <link rel="stylesheet" href="{{asset('css/styles.css')}}" >
        <link rel="stylesheet" href="{{asset('css/cs-select.css')}}" >
        <link rel="stylesheet" href="{{asset('css/cs-skin-overlay.css')}}" >
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
        <meta name="description" content="">
        <meta name="robots" content="index, follow">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
<body style="width: 100%;">


                        <div id="tiendas" class="col-6 col-md-2 align-self-center  position-fixed " style="">
                            <div class="row d-flex justify-content-center align-items-center ">
                                <div class="col-6">
                                    <a href="" title="">
                                        <img src="{{ asset('assets/btn_googleplay.svg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="" title="">
                                        <img src="{{ asset('assets/btn_appstore.svg') }}" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div> 
                        </div>

 <div id="banner_principal" class="principal">
        <div class="col-12 pt-3 pb-3 pl-5 pr-5 p-0 background-white position-main" style=" z-index: 9999">
            <div class="row d-flex justify-content-center justify-content-sm-between align-items-center">

                <div class=" col-xs-12 col-sm-2 pl-5" >
                    <img src="assets/logo.svg" class=" img-fluid"/>
                </div>
                <div class="col-xs-12">
                    <a href="" title="">ES</a> | <a href="" title="">EN</a> 
                </div> 
            </div>
            
        </div>
        

         <div id="carouselExampleSlidesOnly" class="carousel slide row-masthead" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" >
                  <div class="position-absolute col-md-6 p-5 ml-5 c-white background-black top-30 text-center invisible-xs">
                      <h2 class="c-white">Descarga nuestra aplicación</h2>
                      <h3 class="c-white normal">Nuestro compromiso siempre es conseguir la mejor calidad al mejor precio</h3>

                  </div>  
                  <img class="d-block w-100" src="{{asset('assets/usa.png')}}" alt="">
                </div>
                <div class="carousel-item">
                    <div class="position-absolute col-md-6 p-5 ml-5 c-white background-black top-30 text-center invisible-xs">
                        <h2 class="c-white">Llamadas internacionales</h2>  
                        <h3 class="c-white normal" >Phonealo utiliza la tecnología más innovadora para que puedas llamar en el extranjero sin necesidad de datos o wifi.</h3>
                    </div>
                  <img class="d-block w-100" src="{{asset('assets/ecuador.jpg')}}" alt="">
                </div>
                <div class="carousel-item">
                    <div class="position-absolute col-md-6 p-5 ml-5 c-white background-black top-30 text-center invisible-xs">
                      <h2 class="c-white">Cuéntaselo todo</h2>
                      <h3 class="c-white normal">Hasta el último detalle con la gente que te importa.</h3>
                      <p class="c-white">Pruébala gratis</p>
                       
                  </div>
                  <img class="d-block w-100" src="{{asset('assets/cuba.jpg')}}" alt="">
                </div>
            </div>
        </div>

            
              
                <div class=" pt-md-5 pt-xs-0 d-flex flex-row-reverse">
                    <img src="{{asset('assets/iPhone.png')}}" class="iPhone invisible-xs"/>
                </div>
           
       
       
    </div>
    <div class="pt-xs-1 pt-5 bg-white">
        
            @yield('content')
        
    </div>

     <!--Footer Row-->
    <div class="row-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    2018 © Phonealo - ALL Rights Reserved.
                  {{--   <h3>Get in touch</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    <br/><br/>
                    <div class="row">
                        <div class="col-md-3 col-xs-6">
                            <h3>Resources</h3>
                            <ul>
                                <li>Tour</li>
                                <li>Customers</li>
                                <li>Pricing and Plans</li>
                                <li>New Features</li>
                                <li>Education</li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h3>Features</h3>
                            <ul>
                                <li>Tour</li>
                                <li>Customers</li>
                                <li>Pricing and Plans</li>
                                <li>New Features</li>
                                <li>Education</li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h3>How To's</h3>
                            <ul>
                                <li>Tour</li>
                                <li>Customers</li>
                                <li>Pricing and Plans</li>
                                <li>New Features</li>
                                <li>Education</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row-spacer"></div> --}}
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                   {{--  <h3>Stay in touch</h3>
                    <input class="email" placeholder="Enter your email"/>
                    <button type="submit" class="submit">
                        <img src="assets/tick.svg"/>
                    </button>

                    <label class="label-text">We don’t send spam. Actually, who are we kiding, we’ll spam
the shit out of you’r inbox</label> --}}
                </div>
            </div>
        </div>
    </div>



<!--Scripts-->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/classie.js')}}"></script>
<script src="{{asset('js/selectFx.js')}}"></script>

    <script src="{{asset('js/parallax.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>

<script>
 
    (function($){

        $(document).ready(function(){

            var $gridRow = $('.row-grid');
            if ($gridRow.length) {

                var $mainContainer = $('body > .container:first .row:first');
                var pad = $mainContainer.position().left + 15;

                $gridRow.each(function(){
                    var $container = $(this).find('.container');
                    var $rows = $container.find('.row');
                    var containerWidth = 0;
                    $rows.each(function(){
                        var $cols = $(this).find('.grid');
                        var totalWidth = 0;
                        $cols.each(function(){
                            totalWidth += $(this).outerWidth();
                        });
                        if (totalWidth > containerWidth) {
                            containerWidth = totalWidth;
                        }
                    });
                    containerWidth -= 30;
                    containerWidth += (pad * 2);
                    $container.width(containerWidth).css('padding', '0 '+pad+'px');
                });

            }

        });

    })(jQuery);

// $(window).scroll(function() {

//     if ($(window).scrollTop() == 200) {
//       $("#tiendas").fadeIn();//.fadeOut();
//       $("#tiendas").removeClass("display-none");
//     } 
//     if($(window).scrollTop() == 0) {
//       $("#tiendas").fadeOut();//.fadeIn();
//       $("#scroll").addClass("display-none");
//     }
// });
</script>
@stack('scripts') 

</body>
</html>