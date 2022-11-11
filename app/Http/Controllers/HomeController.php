<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Puskesmas;
use PHPUnit\Util\Type;

class HomeController extends Controller
{
    public function index(Type $var = null)
    {
        $kasus = Kasus::all();
        $puskesmas = Puskesmas::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();

        return view('home', ['kasus' => $kasus, 'puskesmas' => $puskesmas, 'kecamatan' => $kecamatan, 'kelurahan' => $kelurahan]);
    }
}