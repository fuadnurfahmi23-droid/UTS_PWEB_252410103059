@extends('layouts.app')
@section('title', 'dashboard')
@section('content')
    <div class="min-vh-100" style="background-color: #FFF8E7; padding: 7rem;">
        <div class="d-flex" style="height: 60%">
            <div class="col-6 d-flex flex-column justify-content-center gap-2">
                <h2>selamat datang {{ $username }}</h2>
                <h1>Warung Kuning</h1>
                <h1>Murah, Enak</h1>
                <h1 style="color: #F5C542">Mengenyangkan!</h1>
                <p style="font-size: 1.5rem">nikmati berbagai pilihan makanan enak dengan harga terjangkau</p>
                <a href="/Menu?username={{ $username }}" class="btn w-25" style="background-color:#F5C542">Lihat menu -></a>
            </div>
            <div class="col-6 d-flex justify-content-center overflow-hidden ">
                <img src="{{asset('images/foto_nasi.png')}}" height="90%">
            </div>
        </div>

        <div class="">
            <div class="d-flex justify-content-between align-items-center">
                <div class="">
                    <h2>menu favorit</h2>
                    <p>pilihan makanan yang paling di sukai orang</p>
                </div>
                <a href="/Menu?username={{ $username }}" class="btn" style="background-color:#F5C542" style="width: 4rem">Lihat menu -></a>
            </div>
            <div class="d-flex row gap-4 px-2">
                @foreach ($populer as $b)
                    <div class="card col p-0">
                        <img src="{{ asset('images/'.$b['gambar']) }}" alt="" class="card-img-top" style="height: 200px">
                        <div class="card-body">
                            <h3 style="color:#493323">{{ $b['nama'] }}</h6>
                            <h3 style="color:#F5C542 ">RP. {{ $b['harga'] }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

