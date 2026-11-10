
@extends('layouts.app')
@section('title', 'Login')
@section('content')
        <div class="min-vh-100 d-flex align-items-center">
            <div class="container d-flex rounded-4 p-0 overflow-hidden h-75" style="color: #493323;">
                @csrf
                <div class="col-4" style="background-color: #F5C542">
            </div>
            <div class="col-8 d-flex flex-column p-5" style="background-color: white">
                <div class="d-flex flex-column align-items-center g-3">
                    <h1 style="color: #F5C542">Warung Kuning</h1>
                    <h3>Selamat Datang</h3>
                    <p>silahkan login untuk melanjutkan</p>
                </div>
                {{-- <form action="/dashboard" method="POST" class="d-flex flex-column >
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit">Masuk</button>
                </form> --}}
                <form action="/dashboard" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">username</label>
                        <input class="form-control" placeholder="Username" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input class="form-control" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn" style="background-color: #F5C542">Login</button>
                </form>
            </div>
        </div>
        </div>
@endsection

