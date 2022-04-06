@extends('layouts.homepage')

@section('main')

<div class="col" style="padding-inline: 132px; margin-top:0px">
    <div class="row">
        <p style="color: black; font-size: 48px; font-weight: 500;">Hello !</p>
    </div>

    <div class="row" style="margin-top: 24px;">
        <p style="color: black; font-size: 48px; font-weight: 500">Dennis Gresan</p>
    </div>

    <div class="row" style="margin-top: 40px">
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </span>
            <input type="text" class="form-control" placeholder="Cari dokter tersedia saat ini" aria-label="search" aria-describedby="basic-addon1" style="background-color: #E9ECEF">
        </div>          
    </div>

    <div class="row justify-content-between" style="margin-top: 40px">
        <div class="col-sm-3" style="width: 370px;">
          <a class="card text-center btn btn-primary shadow p-3 mb-5" href="" style="background-color: #0E8BFF; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/logouser-1.png') }}" alt="" style="width: 68.99px; height: 72px; margin-top: 6px">
                <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 16px">Rumah Sakit</p>
            </div>
        </a>
        </div>
        <div class="col-sm-3" style="width: 370px;">
          <a class="card text-center btn btn-primary shadow p-3 mb-5" href="" style="background-color: #0E8BFF; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/logouser-2.png') }}" alt="" style="width: 62.29px; height: 83px; ; margin-top: 0px">
              <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 11px">Reservasi Kamar</p>
            </div>
        </a>
        </div>
        <div class="col-sm-3" style="width: 370px;">
          <a class="card text-center btn btn-primary shadow p-3 mb-5" href="" style="background-color: #0E8BFF; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/logouser-3.png') }}" alt="" style="width: 68.27px; height: 73.84px; margin-top: 0px">
              <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 20px">Dokter</p>
            </div>
        </a>
        </div>
        <div class="col-sm-3" style="width: 370px;">
          <a class="card text-center btn btn-primary shadow p-3 mb-5" href="" style="background-color: #0E8BFF; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/logouser-4.png') }}" alt="" style="width: 50.79px; height: 60px; margin-top: 12px">
                <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 20px">Edukasi</p>
            </div>
        </a>
        </div>
    </div>

    <div class="row" style="margin-top: 44px">
        <p style="color: black;font-weight: 700; font-size: 27px;">Dokter Kami</p>
    </div>

    <div class="row shadow p-3 mb-5" style="background-color: #F8F9FC;  height: 288px; border:0px; border-radius: 65px; margin-top: 19px">
        <div class="row justify-content-around" style="margin-top: 18px">
            <div class="col-2" style="margin-top: 30px">
                <div class="row">
                    <img class="mx-auto" src="{{ asset('assets/style/images/pic-1.png') }}" alt="" style="width: 187px; height: 166px">
                </div>
            </div>
            <div class="col-7" style="margin-top: 65px">
                <div class="row">
                    <p style="color: black; font-weight: 500; font-size: 30px;">dr. Bambang Gumilang</p>
                </div> 
                <div class="row" style="margin-top: 20px">
                    <p style="color: black; font-weight: 400; font-size: 30px;">Spesialis asam urat <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg> Konsultasi Offline
                    </p>
                </div> 
            </div>
            <div class="col-2" style="margin-top: 80px; margin-right: 102px">
                <button type="button" class="btn btn-primary btn-lg" style="width: 320px; height: 69px; border-radius: 10px">Beri Ulasan</button>
            </div>
          </div>        
    </div>
    <div class="row shadow p-3 mb-5" style="background-color: #F8F9FC;  height: 288px; border:0px; border-radius: 65px; margin-top: 19px">
        <div class="row justify-content-around" style="margin-top: 18px">
            <div class="col-2" style="margin-top: 30px">
                <div class="row">
                    <img class="mx-auto" src="{{ asset('assets/style/images/pic-1.png') }}" alt="" style="width: 187px; height: 166px">
                </div>
            </div>
            <div class="col-7" style="margin-top: 65px">
                <div class="row">
                    <p style="color: black; font-weight: 500; font-size: 30px;">dr. Bambang Gumilang</p>
                </div> 
                <div class="row" style="margin-top: 20px">
                    <p style="color: black; font-weight: 400; font-size: 30px;">Spesialis asam urat <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg> Konsultasi Offline
                    </p>
                </div> 
            </div>
            <div class="col-2" style="margin-top: 80px; margin-right: 102px">
                <button type="button" class="btn btn-primary btn-lg" style="width: 320px; height: 69px; border-radius: 10px">Beri Ulasan</button>
            </div>
          </div>        
    </div>
    <div class="row shadow p-3 mb-5" style="background-color: #F8F9FC;  height: 288px; border:0px; border-radius: 65px; margin-top: 19px">
        <div class="row justify-content-around" style="margin-top: 18px">
            <div class="col-2" style="margin-top: 30px">
                <div class="row">
                    <img class="mx-auto" src="{{ asset('assets/style/images/pic-1.png') }}" alt="" style="width: 187px; height: 166px">
                </div>
            </div>
            <div class="col-7" style="margin-top: 65px">
                <div class="row">
                    <p style="color: black; font-weight: 500; font-size: 30px;">dr. Bambang Gumilang</p>
                </div> 
                <div class="row" style="margin-top: 20px">
                    <p style="color: black; font-weight: 400; font-size: 30px;">Spesialis asam urat <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg> Konsultasi Offline
                    </p>
                </div> 
            </div>
            <div class="col-2" style="margin-top: 80px; margin-right: 102px">
                <button type="button" class="btn btn-primary btn-lg" style="width: 320px; height: 69px; border-radius: 10px">Beri Ulasan</button>
            </div>
          </div>        
    </div>
    <div class="row shadow p-3 mb-5" style="background-color: #F8F9FC;  height: 288px; border:0px; border-radius: 65px; margin-top: 19px">
        <div class="row justify-content-around" style="margin-top: 18px">
            <div class="col-2" style="margin-top: 30px">
                <div class="row">
                    <img class="mx-auto" src="{{ asset('assets/style/images/pic-1.png') }}" alt="" style="width: 187px; height: 166px">
                </div>
            </div>
            <div class="col-7" style="margin-top: 65px">
                <div class="row">
                    <p style="color: black; font-weight: 500; font-size: 30px;">dr. Bambang Gumilang</p>
                </div> 
                <div class="row" style="margin-top: 20px">
                    <p style="color: black; font-weight: 400; font-size: 30px;">Spesialis asam urat <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                        </svg> Konsultasi Offline
                    </p>
                </div> 
            </div>
            <div class="col-2" style="margin-top: 80px; margin-right: 102px">
                <button type="button" class="btn btn-primary btn-lg" style="width: 320px; height: 69px; border-radius: 10px">Beri Ulasan</button>
            </div>
          </div>        
    </div>
</div>    

@endsection