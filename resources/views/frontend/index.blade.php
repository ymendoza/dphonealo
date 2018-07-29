@extends ('frontend.layout.layout')

@section('title', 'Phonealo')

@section ('content')
	@include('frontend.recarga')

	 <!--Full Width Image-->
    <div class="parallax" style="background-image: url('assets/masthead.jpg');" >
        <div class="container padding-200">
            <div class="row ">
                <div class="col-md-6 col-lg-12 col-sm-12 masthead-text ">
                	
                    <h1>Conéctate con tus seres queridos</h1>
                    <h2 class="">Nuestro compromiso siempre es conseguir la mejor calidad al mejor precio.</h2>
                    {{-- <a href="#">Buying Options →</a> --}}
                </div>
            </div>
        </div>
    </div>
     <div class="row-green">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>¿Qué es Phonealo?</h2>
                    <h3>Es una aplicación para hacer llamadas a internacionales utilizando siempre las rutas de mejor calidad precio.</h3>
                </div>
                
            </div>
        </div>
    </div>

    @include('frontend.contacto')
@endsection

@push('scripts')

<script type="text/javascript">
	
	$(document).ready(function(){
		var ancho = $(window).width();

		$(window).scroll(function(){
			var barra = $(window).scrollTop();
			var posicion =  (barra * 0.10);
			
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
 $("select[name=pais]").change(function(){
            alert($('select[name=pais]').val());
            //$('input[name=valor1]').val($(this).val());
        });
    

</script>

            
        
@endpush


