<!--Buying Row-->
    <div class="row-buying">
        <div class="container">
            <div class="row">
                <div class="col-md-6 active">
                    {{-- <span class="badge">Legacy</span> --}}
                    @if($notificacion=Session::get('notificacion'))
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Envio Satisfactorio</strong> 
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                        </div>
                     @endif
                    <h2 class="text-center">¡CONTACTA!</h2>
                    <form action="contacto_submit" method="get" accept-charset="utf-8">
                        <div class="form-group">
                            <label class="label-text" for="email">Email</label>
                            <input type="email" class="col-md-12 form-control email" id="email" required placeholder="Ingresa tu Email">
                        </div>
                        <div class="form-group">
                            <label class="label-text" for="email">Mensaje</label>
                            <textarea name="" class="form-control mensaje" rows="5"></textarea>
                        </div>
                        <div class="form-group text-right">
                            
                           <input type="submit" class="btn btn-success mt-3" value="Enviar" name="">
                        </div>


                    </form> 
                    {{-- <a href="#" class="btn-green">Buy Now $12</a>
                    <img src="assets/fa-apple.svg" class="icon"/>
                    <img src="assets/fa-windows.svg"/> --}}
                </div>
                <div class="col-12 col-md-6 mt-3-xs p-0-xs">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2824.9355199415127!2d25.456864316180347!3d44.92464677730216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b2f69e97c94545%3A0xb66ae1b8a437787b!2sApel+Global+gsma!5e0!3m2!1ses!2ses!4v1532976445438" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>                    

                </div>
            </div>
        </div>
    </div>
</div>