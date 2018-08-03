<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" >
        <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>" >
       
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('favicon.ico')); ?>">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
        <meta name="description" content="">
        <meta name="robots" content="index, follow">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src=“https://www.googletagmanager.com/gtag/js?id=UA-123045744-1“></script>
            <script>
                 window.dataLayer = window.dataLayer || [];
                 function gtag(){dataLayer.push(arguments);}
                 gtag(‘js’, new Date());

                 gtag(‘config’, ‘UA-123045744-1’);
            </script>

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=‘2.0’;
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,‘script’,
            ’https://connect.facebook.net/en_US/fbevents.js');
            fbq(‘init’, ‘446522365864453’); 
            fbq(‘track’, ‘PageView’);
        </script>
        <noscript>
            <img height=“1” width=“1" 
            src=“https://www.facebook.com/tr?id=446522365864453&ev=PageView
            https://www.facebook.com/tr?id=446522365864453&ev=PageView

            &noscript=1”/>
        </noscript>
        <!-- End Facebook Pixel Code -->

           <script type=“text/javascript”> //<![CDATA[ 
        var tlJsHost = ((window.location.protocol == “https:“) ? “https://secure.comodo.com/” : “http://www.trustlogo.com/“);
        document.write(unescape(“%3Cscript src=‘” + tlJsHost + “trustlogo/javascript/trustlogo.js’ type=‘text/javascript’%3E%3C/script%3E”));
        //]]>
        </script>
</head>
<body class="container-fluid " style="padding: 0px;">
    
    <div id="btn-tiendas" class="col-12 col-sm-2 position-fixed d-md-block d-none">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4 col-sm-6">
                <a href="" title="">
                    <img src="<?php echo e(asset('assets/btn_googleplay.svg')); ?>" alt="" class="img-fluid">
                </a>
            </div>
            <div class="col-4 col-sm-6">
                <a href="" title="">
                    <img src="<?php echo e(asset('assets/btn_appstore.svg')); ?>" alt="" class="img-fluid">
                </a>
            </div>
        </div> 
    </div>
    

    
    <div id="menu" class="col-12 position-fixed position-absolute-xs" >   
        <div class="row d-flex justify-content-center justify-content-sm-between align-items-center background-white">
            <div class="col-10 col-sm-2 pl-5 py-3 pl-1-xs" >
                <img src="assets/logo.svg" class=" img-fluid"/>
            </div>
            <div class="col-12 col-sm-auto pb-1-xs pr-5 p-0-xs text-center">
                
                <a href="https://app.phonealo.net//balance" title="Ingresa">Ingresa</a>
            </div> 
        </div> 
    </div>
    

     <?php if($notificacion=Session::get('notificacion')): ?>
        <div class="col-12 d-flex justify-content-center" style="position: absolute; top: 3%; z-index: 9999">
            <div class=" col-12 col-md-6 alert alert-success alert-dismissible fade show" role="alert">
              <strong>Envio Satisfactorio</strong> 
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
     <?php endif; ?>

    
    
    <div id="carouselExampleSlidesOnly" class="carousel slide row-masthead col-12 p-0" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" >
              <div class="position-absolute col-12 col-md-8 col-lg-6 p-5  p-1-sm ml-5 c-white background-black top-30 text-center invisible-xs">
                  <h2 class="c-white size-13" >Descarga nuestra aplicación</h2>
                  <h3 class="c-white normal size-1" >Nuestro compromiso siempre es conseguir la mejor calidad al mejor precio</h3>
              </div>  
              <img class="d-block w-100" src="<?php echo e(asset('assets/usa.png')); ?>" alt="">
            </div>
            <div class="carousel-item">
                <div class="position-absolute col-12 col-md-8 col-lg-6 p-5 p-1-sm ml-5 c-white background-black top-30 text-center invisible-xs">
                    <h2 class="c-white size-13 ">Llamadas internacionales</h2>  
                    <h3 class="c-white normal size-1" >Phonealo utiliza la tecnología más innovadora para que puedas llamar en el extranjero</h3>
                </div>
              <img class="d-block w-100" src="<?php echo e(asset('assets/ecuador.jpg')); ?>" alt="">
            </div>
            <div class="carousel-item">
                <div class="position-absolute col-12 col-md-8 col-lg-6 p-5 p-1-sm ml-5 c-white background-black top-30 text-center invisible-xs">
                  <h2 class="c-white size-13 ">Chatea y Cuéntaselo todo</h2>
                  <h3 class="c-white normal  size-1">Hasta el último detalle con la gente que te importa.</h3>
              </div>
              <img class="d-block w-100" src="<?php echo e(asset('assets/cuba.jpg')); ?>" alt="">
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-lg-6">
            </div>
            <div class="col-md-2 d-md-block d-none">
                <img src="assets/iPhone1.png" class="iPhone"/>
            </div>
        </div>
    </div>
    
    
    <div class="pt-xs-1 pt-5 bg-white content">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    
    <!-- FOOTER -->
    <div class="row-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    2018 © Phonealo - ALL Rights Reserved.
                    <br>
                    B-Duc Mircea Cel Batran H5, Targoviste, Romania
                </div>
                <div class="col-12 mt-3-xs col-md-5 col-md-offset-1 col-sm-6">
                    <div class="row d-flex justify-content-center justify-content-sm-end ">
                        <div class="col-2">
                            <a target="blank_" href="https://www.instagram.com/phonealo_app/" title="Instagram">
                                <img src="<?php echo e(asset('assets/ig_circle.svg')); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-2">
                            <a target="blank_" href="https://www.facebook.com/Phonealo-642900916095975/?modal=admin_todo_tour" title="Facebook">
                                <img src="<?php echo e(asset('assets/fb_circle.svg')); ?>" alt="">
                            </a>
                        </div>
                        <div class="col-2">
                            <a target="blank_" href="#">
                                <img src="<?php echo e(asset('assets/tw_circle.svg')); ?>" alt="@Phonealo1">
                            </a>
                        </div>
                        <div class="col-2">
                            <a target="blank_" href="skype:phonealo app">
                                <img src="<?php echo e(asset('assets/sk_circle.svg')); ?>" alt="">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    

    <!--Scripts-->
       <script language=“JavaScript” type=“text/javascript”>
TrustLogo(“http://www.phonealo.com/comodo_secure_seal_76x26_transp.png
http://www.phonealo.com/comodo_secure_seal_76x26_transp.png
“, “CL1”, “none”);
</script>
<a  href=“https://www.positivessl.com/” id=“comodoTL”>Positive SSL</a>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/classie.js')); ?>"></script>
    <script src="<?php echo e(asset('js/selectFx.js')); ?>"></script>
    <script src="<?php echo e(asset('js/parallax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>

<?php echo $__env->yieldPushContent('scripts'); ?> 

</body>
</html>