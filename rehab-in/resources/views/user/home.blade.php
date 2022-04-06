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
        <div class="col-sm-3" style="width: 300px;">
          <div class="card text-center" style="background-color: #0E8BFF; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/logouser-1.png') }}" alt="" style="width: 68.99px; height: 72px; margin-top: 15px">
                <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 16px">Rumah Sakit</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="width: 300px;">
          <div class="card text-center" style="background-color: #0E8BFF; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/logouser-2.png') }}" alt="" style="width: 62.29px; height: 83px; ; margin-top: 10px">
              <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 11px">Reservasi Kamar</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="width: 300px;">
          <div class="card text-center" style="background-color: #0E8BFF; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/logouser-3.png') }}" alt="" style="width: 68.27px; height: 73.84px; margin-top: 12px">
              <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 20px">Dokter</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3" style="width: 300px;">
          <div class="card text-center" style="background-color: #0E8BFF; border:0px; border-radius: 30px; height: 170px">
            <div class="card-body">
                <img src="{{ asset('assets/style/images/logouser-4.png') }}" alt="" style="width: 50.79px; height: 60px; margin-top: 18px">
                <p class="card-text" style="font-weight: 500; font-size: 24px; line-height: 28px; margin-top: 20px">Edukasi</p>
            </div>
          </div>
        </div>
    </div>

    <div class="row" style="margin-top: 45px">
        <p style="color: black;font-weight: 700; font-size: 27px;">Jadwal Konsultasi Hari Ini</p>
    </div>

    <div class="card bg-transparent text-white" style="border: 0px; margin-top: 19px">
        <img src="{{ asset('assets/style/images/user-konsultasi.png') }}" class="card-img" alt="...">
        <div class="card-img-overlay">
            <div class="row" style="margin-right: 30px">
                <div class="col-sm-2">
                    <img src="{{ asset('assets/style/images/profile-pic.png') }}" alt="" style="width: 157.93px; height: 168px; margin-top: 60px; margin-left: 69px">
                </div>
                <div class="col-sm-3">
                    <p style="font-weight: 500; font-size: 30px; margin-top: 111px">dr. Muhammad Syahid</p>
                    <p style="font-weight: 400; font-size: 26px; margin-top: 15px">Spesialis jantung</p>
                </div>
                <div class="col-sm-7" style="background-color: #EDEAEA; margin-top: 40px; height: 230px; border-radius: 30px">
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
                                <p style="font-weight: 300; font-size: 26px; color:black"> <img src="{{ asset('assets/style/images/chat-user.png') }}" alt="" style="height: 46px; width: 52.26px; margin-right:12px"> Hubungi Dokter</p>
                            </div>
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
              <img src="{{ asset('assets/style/images/durasitidur.png') }}" alt="" style="width: 119px; height: 124px">
                    <p style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">Durasi Tidur</p>
                    <p style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">5-7 jam</p>
            </div>
            <div class="col-3">
              <img src="{{ asset('assets/style/images/kualitastidur.png') }}" alt="" style="width: 119px; height: 124px">
                    <p style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">Kualitas Tidur</p>
                    <p style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">normal</p>
            </div>
            <div class="col-3">
              <img src="{{ asset('assets/style/images/olahraga.png') }}" alt="" style="width: 119px; height: 124px">
                    <p style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">Olahraga</p>
                    <p style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">sedang</p>
            </div>
            <div class="col-3">
              <img src="{{ asset('assets/style/images/mood.png') }}" alt="" style="width: 119px; height: 124px"s>
                    <p style="color: #ACABAB; margin-top: 24px; font-size: 27px; font-weight:500">Mood</p>
                    <p style="color: black; margin-top: 24px; font-size: 27px; font-weight:500">yeah!</p>
            </div>
          </div>        
    </div>
</div>    

@endsection