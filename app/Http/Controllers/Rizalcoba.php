<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rizalcoba extends Controller
{
    function index ()
    {
        $nama = 'Ahmad Rafli Abu Rizal';
        $asal = 'Surabaya';
        $tgl_lahir='22 Maret 2004';
        $hobby='Main game';

        return view('biio', compact('nama', 'asal', 'tgl_lahir', 'hobby'));
    }

    function endex ()
    {
        $nama = 'Matthew Sebastian';
        $asal = 'Surabaya';
        $tgl_lahir='9 Januari 2005';
        $hobby='Basketball';

        return view('biio', compact('nama', 'asal', 'tgl_lahir', 'hobby'));
    }
}
