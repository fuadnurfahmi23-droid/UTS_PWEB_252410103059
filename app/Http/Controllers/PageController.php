<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view("login");
    }

    public function dashboard(Request $request){
        $populer = [
            ['gambar' => 'foto_jamur.jpg',      'nama'=> 'jamur',       'harga'=> '4000'],
            ['gambar' => 'foto_telur_dadar.jpg','nama'=> 'telur dadar', 'harga'=> '4000'],
            ['gambar' => 'foto_tempe_orek.png', 'nama'=> 'tempe orek',  'harga'=> '2000'],
            ['gambar' => 'foto_pecel.jpg',      'nama'=> 'pecel',       'harga'=> '3000'],
        ];

        return view("dashboard", ["populer"=> $populer, "username"=> $request->username]);
    }

    public function pengelola(Request $request){
        $menu = [
            ['gambar' => 'foto_jangan_bening.jpg','nama'=> 'jangan bening', 'harga'=> '1000'],
            ['gambar' => 'foto_kangkung.jpg',   'nama'=> 'tumis kangkung',  'harga'=> '1000'],
            ['gambar' => 'foto_sop.jpg',        'nama'=> 'sop',  'harga'=>  '1000'],
            ['gambar' => 'foto_terong.jpg',     'nama'=> 'terong',          'harga'=> '1000'],

            ['gambar' => 'foto_jamur.jpg',      'nama'=> 'jamur',       'harga'=> '4000'],
            ['gambar' => 'foto_telur_dadar.jpg','nama'=> 'telur dadar', 'harga'=> '4000'],
            ['gambar' => 'foto_tempe_orek.png', 'nama'=> 'tempe orek',  'harga'=> '2000'],
            ['gambar' => 'foto_pecel.jpg',      'nama'=> 'pecel',       'harga'=> '3000'],

            ['gambar' => 'foto_telur.jpg',      'nama'=> 'telur ceplok', 'harga'=> '4000'],
            ['gambar' => 'telur_balado.jpg',    'nama'=> 'telur balado', 'harga'=> '4000'],
            ['gambar' => 'foto_ayam_suwir.jpg', 'nama'=> 'ayam suwir',   'harga'=> '5000'],
            ['gambar' => 'fot_kulit_ayam.jpg',  'nama'=> 'kulit ayam',   'harga'=> '1000'],

            ['gambar' => 'ayam_geprek.jpg',     'nama'=> 'ayam geprek',         'harga'=> '6000'],
            ['gambar' => 'ayam_goreng.jpg',     'nama'=> 'ayam tempe tahu',     'harga'=> '8000'],
            ['gambar' => 'foto_gorengan.jpg',   'nama'=> 'gorengan',            'harga'=> '500'],
            ['gambar' => 'foto_omelet.jpg',     'nama'=> 'omelet',              'harga'=> '1000'],
        ];
        return view("pengelolaan", ["menu"=> $menu, "username"=> $request->username]);
    }

    public function profil(Request $request){
        return view("profile", ["username"=> $request->username]);
    }

}
