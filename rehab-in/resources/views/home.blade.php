@extends('layouts.user')

@section('main')

<div class="container">
<div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
            <div class="row">
              <div class="col-lg-12">
                <h6>Rehabilitasi di Rehab-IN yuk!</h6>
                <h2>Rehab-IN mempermudah anda untuk mendapatkan layanan rehabililtasi</h2>
                <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p>
              </div>
        
                <div class=" scroll-to-section">
                  <div id="free-quote" class="free-quote">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                      <form id="search" action="#" method="GET">
                        <div class="row">
                          <div class="col-lg-6 col-sm-4">
                            <fieldset>
                              <input type="web" name="web" class="website" placeholder="Temukan doktermu disini..." autocomplete="on" required>
                            </fieldset>
                          </div>
                          <div class="col-lg-4 col-sm-4">
                            <fieldset>
                              <button type="submit" class="main-button">Cari</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                    </div>
              </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
            <img src=" {{ asset('assets/style/images/img-front-left.png') }}" alt="">

          
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection