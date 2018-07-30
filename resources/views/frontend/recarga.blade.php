<div class="container pt-5 pb-5" >
  <div class="row">
    <div class="col-12 text-center pb-5">
      <h1 class="c-black title-h1">¡Recarga ahora y Phonealo!</h1>
    </div>
    <div class="col-12 pb-5">
<form action="{{ asset('recarga_submit') }}" method="post" accept-charset="utf-8">
<input name="_token" value="{{ csrf_token() }}" type="hidden" onclick=""></input>

      <div class="row pb-5">   
        <div class="col-12 col-md-6">
          <div class="d-flex justify-content-center align-items-center">
            <section style="width: 100%">
              <select id="pais" name="pais" class="cs-select cs-skin-overlay pais">
                <option value="" disabled selected>Seleccione un País</option>
                  @foreach ($paises as $pais)
                    <optgroup>
                      <option value="{{ $pais->pais_cod }}">{{ $pais->pais_desc }}</option>
                    </optgroup>
                  @endforeach
              </select>
            </section>
          </div>
        </div>

        <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
           <input type="telefono" class="col-md-12 form-control tel" name="tel" id="email" required placeholder="Ingresa tu Número Telefónico">
        </div>
      </div>
      
  
      <div class="col-12 " id="tarifas">
     
          <div class="d-flex justify-content-center align-items-center">
            <section style="width: 100%">
              <select id="pais" name="pais" class="cs-select cs-skin-overlay pais">
                <option value="" disabled selected>Seleccione Importe</option>
                 
                    <optgroup>
                      <option value="5"><span class="moneda"></span>5</option>
                      <option value="10"><span class="moneda"></span>10</option>
                      <option value="20"><span class="moneda"></span>20</option>
                    </optgroup>
                    <optgroup>
                      <option value="50"><span class="moneda"></span>50</option>
                      <option value="100"><span class="moneda"></span>100</option>
                      <option value="500"><span class="moneda"></span>500</option>
                    </optgroup>
                 
              </select>
            </section>
          </div>

      </div>
    
    <div class="col-12 text-center mt-5">
      <input type="submit" class="btn btn-outline-danger btn-lg" value="Recarga">
    </div>

</form>

  </div>
</div>
</div>