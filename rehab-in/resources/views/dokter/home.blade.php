@extends('layouts.homepage')

@section('main')

<div class="col" style="padding-inline: 132px; margin-top:0px">
    <div class="row">
        <p style="color: black; font-size: 48px; font-weight: 500;">Hello !</p>
    </div>

    <div class="row" style="margin-top: 24px;">
        <p style="color: black; font-size: 48px; font-weight: 500">dr. Dennis Gresan</p>
    </div>

    <div class="row" style="margin-top: 40px">
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </span>
            <input type="text" class="form-control" placeholder="Cari template resep obat disini" aria-label="search" aria-describedby="basic-addon1" style="background-color: #E9ECEF">
        </div>          
    </div>

    <div class="row justify-content-between" style="margin-top: 40px">
        <div class="col-sm-3" style="width: 370px;">
          <div class="card text-center" style="background-color: #F8F9FC; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/jadwal-dokter.png') }}" alt="" style="width: 80.69px; height: 78.65px; margin-top: 15px">
                <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 16px; color: #0E8BFF">Rumah Sakit</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="width: 370px;">
          <div class="card text-center" style="background-color: #F8F9FC; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/daftarpasien-dokter.png') }}" alt="" style="width: 78.83px; height: 84px; margin-top: 13px">
              <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 13px; color: #0E8BFF">Reservasi Kamar</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="width: 370px;">
          <div class="card text-center" style="background-color: #F8F9FC; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/feedback-dokter.png') }}" alt="" style="width: 60.29px; height: 63px; margin-top: 20px">
              <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 25px; color: #0E8BFF">Dokter</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="width: 370px;">
          <div class="card text-center" style="background-color: #F8F9FC; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/resep-dokter.png') }}" alt="" style="width: 86.25px; height: 93px; margin-top: 8px">
                <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 14px; color: #0E8BFF">Edukasi</p>
            </div>
          </div>
        </div>
    </div>

    <div class="row" style="margin-top: 45px">
        <p style="color: black;font-weight: 700; font-size: 27px;">Jadwal konsultasi bersama pasien hari ini</p>
    </div>

    <div class="card bg-transparent text-white" style="border: 0px; margin-top: 19px">
        <img src="{{ asset('assets/style/images/user-konsultasi.png') }}" class="card-img" alt="...">
        <div class="card-img-overlay">
            <div class="row" style="margin-right: 30px">
                <div class="col-sm-2">
                    <img src="{{ asset('assets/style/images/dokter-pict.png') }}" alt="" style="width: 165.98px; height: 168px; margin-top: 60px; margin-left: 69px">
                </div>
                <div class="col-sm-3">
                    <p style="font-weight: 500; font-size: 30px; margin-top: 111px">Tn. Reynal Alif</p>
                    <p style="font-weight: 400; font-size: 26px; margin-top: 15px">Konsultasi online</p>
                </div>
                <div class="col-sm-7" style="background-color: #EDEAEA; height: 230px; margin-top: 40px; border-radius: 30px">
                    <div class="row">
                        <div class="col" style="margin-left: 40px">
                            <div class="row" style="margin-top: 50px">
                                <p style="font-weight: 300; font-size: 26px;color:black"> <img src="{{ asset('assets/style/images/date-user.png') }}" alt="" style="height: 53px; width: 50.11px; margin-right:12px"> Jumat, 25 Maret 2022</p>
                            </div>
                            <div class="row" style="margin-top: 30px">
                                <p style="font-weight: 300; font-size: 26px;color:black"> <img src="{{ asset('assets/style/images/time-user.png') }}" alt="" style="height: 56px; width: 59.51px; margin-right:12px"> 11.00 - 13.00 WIB</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row" style="margin-top: 54px">
                                <p style="font-weight: 300; font-size: 26px; color:black"> <img src="{{ asset('assets/style/images/chat-user.png') }}" alt="" style="height: 46px; width: 52.26px; margin-right:12px"> Hubungi Pasien</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 44px">
        <p style="color: black;font-weight: 700; font-size: 27px;">Catatan Kesehatan</p>
    </div>

    <div class="row text-center" style="background-color: #F8F9FC;  height: 312px; border:0px; border-radius: 65px; margin-top: 19px">
        <div class="row justify-content-around" style="margin-top: 34px">
            <div class="col-sm-3">
              <img src="{{ asset('assets/style/images/pasien-dokter.png') }}" alt="" style="width: 119px; height: 124px">
                    <p style="color: #ACABAB; margin-top: 30px; font-size: 27px; font-weight:500">Pasien</p>
                    <p style="color: black; margin-top: 30px; font-size: 27px; font-weight:500">325</p>
            </div>
            <div class="col-3">
              <img src="{{ asset('assets/style/images/konsultasi-dokter.png') }}" alt="" style="width: 119px; height: 124px">
                    <p style="color: #ACABAB; margin-top: 30px; font-size: 27px; font-weight:500">Konsultasi</p>
                    <p style="color: black; margin-top: 30px; font-size: 27px; font-weight:500">56</p>
            </div>
            <div class="col-3">
              <img src="{{ asset('assets/style/images/pemberianresep-dokter.png') }}" alt="" style="width: 119px; height: 124px">
                    <p style="color: #ACABAB; margin-top: 15px; font-size: 27px; font-weight:500">Pemberian <br> Resep</p>
                    <p style="color: black; margin-top: 15px; font-size: 27px; font-weight:500">45</p>
            </div>
            <div class="col-3">
              <img src="{{ asset('assets/style/images/checkup-dokter.png') }}" alt="" style="width: 119px; height: 124px"s>
                    <p style="color: #ACABAB; margin-top: 30px; font-size: 27px; font-weight:500">check-up</p>
                    <p style="color: black; margin-top: 30px; font-size: 27px; font-weight:500">15</p>
            </div>
          </div>        
    </div>

    <div class="row" style="margin-top: 44px">
        <p style="color: black;font-weight: 700; font-size: 27px;">Kalender</p>
    </div>
    
    <div class="row" style="margin-top: 19px">
        <img src="{{ asset('assets/style/images/calender.png') }}" alt="">
    </div>

</div>    

@endsection