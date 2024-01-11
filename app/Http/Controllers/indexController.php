<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function searchIndexMagang() {
        return view('searchIndexMagang');
    }
    public function searchIndexStudiIndependen() {
        return view('searchIndexStudiIndependen');
    }
}