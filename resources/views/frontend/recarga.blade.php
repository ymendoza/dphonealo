<div class="container pt-5 pb-5" >
  <div class="row">
    <div class="col-12 text-center pb-5">
      <h1 class="c-black title-h1">¡Recarga ahora y Phonealo!</h1>
    </div>
    <div class="col-12 pb-5">

      <div class="row pb-5">   
        <div class="col-12 col-md-6">
          <div class="d-flex justify-content-center align-items-center">
            <section style="width: 100%">
              <select id="pais" name="pais" class="cs-select cs-skin-overlay pais">
                <option value="" disabled selected>Seleccione un País</option>
                  @foreach ($paises as $pais)
                    <optgroup label="">
                      <option value="111">{{ $pais->pais_desc }}</option>
                    </optgroup>
                  @endforeach
              </select>
            </section>
          </div>
        </div>

        <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
           <input type="telefono" class="col-md-12 form-control email" id="email" required placeholder="Ingresa tu Número Telefónico">
        </div>
      </div>
      
      

    <div id="precios" class="display-non">
      
      <div class="row">
        <div class="col-6 col-md-12">
          <div class="card-deck">
            <div class="card">
              <div class="d-flex justify-content-center mt-3">
                <div class="col-7 col-md-5">
                  <img src="{{ asset('assets/burbuja.svg') }}" alt="" class="img-fluid">
                  <div class="d-flex  align-items-center justify-content-center position-absolute w-80 height-100 top">
                    <p class="c-white bold size-burbuja">$5</p>
                  </div>
                </div>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">50 minutos</h5>
                  <input type="submit" value="Comprar" class="btn btn-outline-danger" name="">
              </div>
            </div>
            <div class="card">
              <div class="d-flex justify-content-center mt-3">
                <div class="col-7 col-md-5">
                  <img src="{{ asset('assets/burbuja.svg') }}" alt="" class="img-fluid">
                  <div class="d-flex  align-items-center justify-content-center text-center position-absolute w-80 height-100 top">
                    <p class="c-white bold size-burbuja">$10</p>
                  </div>
                </div>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">50 minutos</h5>
                  <input type="submit" value="Comprar" class="btn btn-outline-danger" name="">
              </div>
            </div>
            <div class="card">
              <div class="d-flex justify-content-center mt-3">
                <div class="col-7 col-md-5">
                  <img src="{{ asset('assets/burbuja.svg') }}" alt="" class="img-fluid">
                  <div class="d-flex  align-items-center justify-content-center text-center position-absolute w-80 height-100 top">
                    <p class="c-white bold size-burbuja">$20</p>
                  </div>
                </div>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">50 minutos</h5>
                  <input type="submit" value="Comprar" class="btn btn-outline-danger" name="">
              </div>
            </div>
          </div>
        </div>

        <div class="col-6 col-md-12 mt-3 m-0">
          <div class="card-deck">
            <div class="card">
              <div class="d-flex justify-content-center mt-3">
                <div class="col-7 col-md-5">
                  <img src="{{ asset('assets/burbuja.svg') }}" alt="" class="img-fluid">
                  <div class="d-flex  align-items-center justify-content-center text-center position-absolute w-80 height-100 top">
                    <p class="c-white bold size-burbuja">$50</p>
                  </div>
                </div>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">50 minutos</h5>
                  <input type="submit" value="Comprar" class="btn btn-outline-danger" name="">
              </div>
            </div>
            <div class="card">
              <div class="d-flex justify-content-center mt-3">
                <div class="col-7 col-md-5">
                  <img src="{{ asset('assets/burbuja.svg') }}" alt="" class="img-fluid">
                  <div class="d-flex  align-items-center justify-content-center text-center position-absolute w-80 height-100 top">
                    <p class="c-white bold size-burbuja">$100</p>
                  </div>
                </div>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">50 minutos</h5>
                  <input type="submit" value="Comprar" class="btn btn-outline-danger" name="">
              </div>
            </div>
            <div class="card">
              <div class="d-flex justify-content-center mt-3">
                <div class="col-7 col-md-5">
                  <img src="{{ asset('assets/burbuja.svg') }}" alt="" class="img-fluid">
                  <div class="d-flex  align-items-center justify-content-center text-center position-absolute w-80 height-100 top">
                    <p class="c-white bold size-burbuja">$200</p>
                  </div>
                </div>
              </div>
              <div class="card-body text-center">
                <h5 class="card-title">50 minutos</h5>
                  <input type="submit" value="Comprar" class="btn btn-outline-danger" name="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
</div>