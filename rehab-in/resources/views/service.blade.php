@extends('layouts.user')

@section('main')

<div id="portfolio" class="our-portfolio section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Layanan Kami</h6>
            <h4>Layanan Kami <em>Saat Ini</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
      <div class="row">
        <div class="col-lg-12">
          <div class="loop owl-carousel">
            <div class="item">
              <a href="#">
                <div class="portfolio-item">
                <div class="thumb">
                  <img src="{{ asset('assets/style/images/portfolio-04.jpg') }}" alt="">
                </div>
                <div class="down-content">
                  <h4>Website Builder</h4>
                  <span>Marketing</span>
                </div>
              </div>
              </a>  
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection