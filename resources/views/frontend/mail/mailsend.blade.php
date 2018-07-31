<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Enviado</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>
<body style="width: 100%; position: absolute; font-family: sans-serif;">
	<div style="width: 60%; text-align:justify; margin-left: auto; margin-right: auto;">
		{{-- <div style=" background-color: #1E90FF; color: white; text-align: center; border-radius: 15px 15px 0 0">
			
		</div> --}}
		<div style="padding: 30px; border-radius: 15px">
			<div style="text-align: center;">
				@php
					$img= public_path('assets/logo.svg');
				@endphp
				<img  width="200px" src="<?php echo $message->embed($img); ?>">

				<b style="text-transform: uppercase; "><h1>Mensaje Web</h1></b>	
			</div>
			
			{{ $email }}
			{{ $mensaje }}
		
			
	

		</div>
	</div>
</body>
</html>