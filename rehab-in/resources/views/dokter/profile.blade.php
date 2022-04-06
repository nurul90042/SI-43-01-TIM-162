@extends('layouts.user')

@section('main')
    <div class="row shadow p-3 mb-5" style="border-radius: 55px; margin-inline: 119px; background-color: #FFFFFF">
        <div class="row mx-auto shadow p-3 mb-5" style="background-color: #E7E7E7; margin-top: 29px; border-radius: 50px; width: 1735px">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('assets/style/images/pic-dokter.png') }}" alt="" style="width: 318px; height: 322px; margin: 41px">
                </div>
                <div class="col-7">
                    <p style="color: black; font-weight: 700; font-size: 35px; margin-top: 80px">Profile Anda</p>
                    <p style="color: black; font-weight: 500; font-size: 80px; margin-top: 142px">Dr. Denis Gresan</p>
                    <p style="color: black; font-weight: 400; font-size: 26px; margin-top: 30px">Spesialis asam urat </p>
                </div>
                <div class="col-2" style="margin-top: 222px">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('assets/style/images/rate.png') }}" alt="" style="width: 85px; height: 85px;margin-left: 30px">
                        </div>
                        <div class="col">
                            <p style="color: black; font-weight: 500; font-size: 48px; margin-top: 35px">5.0</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-left: 78px; padding-right: 78px; margin-bottom: 40px">
                <p style="color: black; font-weight: 700; font-size: 30px;">Tentang</p>
                <p style="color: black; font-weight: 400; font-size: 26px;margin-top: 20px">Dr. Denis Gresan merupakan lulusan S3 Jurusan Kedokteran dari ITB. Menjadi tulang belakang dari beberapa perkembangan medis pada abad ke 20. Dr. Denis Gresan berpengalaman selama 8 tahun menjadi dokter dan telah menangani lebih dari 10.000 pasien.</p>
            </div>
        </div>
        <div class="container" style="padding-right: 80px; padding-left: 80px">
            <p style="color: black; font-weight: 700; font-size: 27px;">Username</p>
            <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 15px">denistaubatgresan</p>
            <hr style="margin-top: 10px">
            <p style="color: black; font-weight: 700; font-size: 27px; margin-top: 25px">Alamat</p>
            <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 15px">Jl. Telekomunikasi No.40, Kecamatan Bojongsoang, Bandung, Jawa Barat</p>
            <hr style="margin-top: 10px">
            <p style="color: black; font-weight: 700; font-size: 27px; margin-top: 25px">Tempat Tanggal Lahir</p>
            <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 15px">Jakarta, 12 Juni 1986</p>
            <hr style="margin-top: 10px">
            <p style="color: black; font-weight: 700; font-size: 27px; margin-top: 25px">Usia</p>
            <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 15px">36</p>
            <hr style="margin-top: 10px">
            <p style="color: black; font-weight: 700; font-size: 27px; margin-top: 25px">Nomor Telepon</p>
            <p style="color: black; font-weight: 500; font-size: 27px; margin-top: 15px">081234567890</p>
            <hr style="margin-top: 10px">
            
            {{-- <form action="">
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label-lg">Username</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label-lg">Alamat</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label-lg">Tempat Tanggal Lahir</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label-lg">Usia</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-4">
                    <label for="exampleInputEmail1" class="form-label-lg">Nomor Telepon</label>
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </form> --}}
        </div>
        <div class="row" style="margin-bottom: 50px; margin-top: 35px">
            <div class="col-3" style="margin-left: 70px">
                <button type="button" class="btn btn-primary btn-lg">edit profile</button>
            </div>
        </div>
    </div>
@endsection