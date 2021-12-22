<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Matthewcoba extends Controller
{
    function index()
    {
         $sekolah1 = 'SMK 17 AGUSTUS 1945 SURABAYA';
         $alamat1 = 'Jl. Nginden Semolo No.44, Nginden Jangungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118';
         $murid1 = 'Matthew Sebastian';

         $sekolah2 = 'SMK 17 AGUSTUS 1945 SURABAYA';
         $alamat2 = 'Jl. Nginden Semolo No.44, Nginden Jangungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118';
         $murid2 = 'Ahmad Rafli Abu Rizal';

          return view('jual', compact ('sekolah1', 'sekolah2', 'alamat1', 'alamat2', 'murid1', 'murid2'));
    }
}
