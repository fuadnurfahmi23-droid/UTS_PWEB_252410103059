@extends('layouts.app')
@section('title', 'Menu')
@section('content')
    <div class="" style="padding: 7rem">
        <div class="d-flex flex-column align-items-center">
            <h1 style="font-size: 3rem">MENU</h1>
            <p>nikmati semua menu yang enak dan murah</p>
        </div>
        <div class="row row-cols-4 g-3" >
            @foreach ($menu as $m)
                <div class="col">
                    <div class="card p-0">
                        <img src="{{ asset('images/'.$m['gambar']) }}" alt="" class="card-img-top" style="height: 200px">
                        <div class="card-body">
                            <h3 style="color:#493323">{{ $m['nama'] }}</h6>
                            <h3 style="color:#F5C542 ">RP. {{ $m['harga'] }}</h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
