<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" >
        <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>" >
        <link rel="stylesheet" href="<?php echo e(asset('css/cs-select.css')); ?>" >
        <link rel="stylesheet" href="<?php echo e(asset('css/cs-skin-overlay.css')); ?>" >
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('favicon.ico')); ?>">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
        <meta name="description" content="">
        <meta name="robots" content="index, follow">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    </head>
<body style="width: 100%;">

 <div id="banner_principal" class="principal">
        
        <div class=" col-xs-12 col-sm-4 logo">
            <img src="assets/logo.svg" class=" img-fluid"/>
        </div>

         <div id="carouselExampleSlidesOnly" class="carousel slide row-masthead" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" >
                  <img class="d-block w-100" src="<?php echo e(asset('assets/masthead.jpg')); ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo e(asset('assets/masthead.jpg')); ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo e(asset('assets/masthead.jpg')); ?>" alt="Third slide">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row pt-md-5 pt-xs-0">
                <div class=" col-xs-12 col-sm-8 col-lg-6">
                    
                </div>
                <div class="col-sm-4 invisible-xs">
                    <img src="<?php echo e(asset('assets/iPhone.png')); ?>" class="iPhone"/>
                </div>
            </div>
        </div>
       
    </div>
    <div class="pt-xs-1 pt-5 bg-white">
        
            <?php echo $__env->yieldContent('content'); ?>
        
    </div>

     <!--Footer Row-->
    <div class="row-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Get in touch</h3>
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
                    <div class="row-spacer"></div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <h3>Stay in touch</h3>
                    <input class="email" placeholder="Enter your email"/>
                    <button type="submit" class="submit">
                        <img src="assets/tick.svg"/>
                    </button>

                    <label class="label-text">We don’t send spam. Actually, who are we kiding, we’ll spam
the shit out of you’r inbox</label>
                </div>
            </div>
        </div>
    </div>



<!--Scripts-->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/classie.js')); ?>"></script>
<script src="<?php echo e(asset('js/selectFx.js')); ?>"></script>

    <script src="<?php echo e(asset('js/parallax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>

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

     
</script>
<?php echo $__env->yieldPushContent('scripts'); ?> 

</body>
</html>