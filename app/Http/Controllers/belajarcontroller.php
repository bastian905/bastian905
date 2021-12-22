<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class belajarcontroller extends Controller
{
    function index()
    {
        

        $judul = 'Pilpres 2019';
        $capres1 = 'Jokowi Dodo';
        $capres2 = 'Prabowo Subiyakto';
        $cawapres1 = "Ma'ruf Amin";
        $cawapres2 = 'Sandiaga Salahuddin Uno';

        return view ('Pilpres', compact('judul', 'capres1', 'capres2', 'cawapres1', 'cawapres2'));





    }
}
