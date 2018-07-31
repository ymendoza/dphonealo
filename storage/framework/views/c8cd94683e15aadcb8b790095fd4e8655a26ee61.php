<?php $__env->startSection('title', 'Phonealo'); ?>

<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('frontend.recarga', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	  <!--Full Width Image-->
    <div class="parallax" style="background-image: url('assets/alemania.png');" >
        <div class="container padding-200">
            <div class="row w-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10  pl-2-xs">
                	
                    <h1 class="title-h1">Conéctate con tus seres queridos</h1>
                    <h2 class="c-white title-h2">Nuestro compromiso siempre es conseguir la mejor calidad al mejor precio.</h2>
            
                </div>
            </div>
        </div>
    </div>

   <div class="row-green">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10  pl-2-xs">
                    <h2>¿Qué es Phonealo?</h2>
                    <h3>Es una aplicación para hacer llamadas a internacionales utilizando siempre las rutas de mejor calidad precio.</h3>
                </div>
                
            </div>
        </div>
    </div>

     <?php echo $__env->make('frontend.contacto', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script type="text/javascript">
	
	$(document).ready(function(){
		var ancho = $(window).width();

		$(window).scroll(function(){
			var barra = $(window).scrollTop();
			var posicion =  (barra * 0.05);
			
			$('.parallax').css({
				'background-position': '0 -' + posicion + 'px'
			});
	 
		});
	 

		if (ancho <= 1350){
			$('.parallax').css({
				'background-size': 'initial'
			});
		}

       [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {    
                    new SelectFx(el, {
                        stickyPlaceholder: false
                    });
                } );

      
	 
	});
        
       SelectFx.prototype._changeOption = function() {

        // if pre selected current (if we navigate with the keyboard)...
        if( typeof this.preSelCurrent != 'undefined' && this.preSelCurrent !== -1 ) {
            this.current = this.preSelCurrent;
            this.preSelCurrent = -1;
        }

        // current option
        var opt = this.selOpts[ this.current ];

        // update current selected value
        this.selPlaceholder.textContent = opt.textContent;
        
        // change native select element´s value
        this.el.value = opt.getAttribute( 'data-value' );

        // remove class cs-selected from old selected option and add it to current selected option
        var oldOpt = this.selEl.querySelector( 'li.cs-selected' );
        if( oldOpt ) {
            classie.remove( oldOpt, 'cs-selected' );
        }
        classie.add( opt, 'cs-selected' );

        // if there´s a link defined
        if( opt.getAttribute( 'data-link' ) ) {
            // open in new tab?
            if( this.options.newTab ) {
                window.open( opt.getAttribute( 'data-link' ), '_blank' );
            }
            else {
                window.location = opt.getAttribute( 'data-link' );
            }
        }

        // callback
        this.options.onChange( this.el.value );

        var pais = this.el.value;
        //console.log(pais);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "GET",
            url: '<?php echo e(url('tarifas')); ?>',
            dataType: "json",
            data: { pais: pais,_token: '<?php echo e(csrf_token()); ?>' },
            success: function (data){

                //$('#tarifas').removeClass('display-none');

                if (data.tar_currency == 'EUR') {
                   $('.moneda').append('€'); 
                }


            }

        });
    }


        jQuery('img.svg').each(function(){
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function(data) {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if(typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if(typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass+' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);

            }, 'xml');

        });
    

</script>

            
        
<?php $__env->stopPush(); ?>



<?php echo $__env->make('frontend.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>