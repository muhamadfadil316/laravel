<?php

namespace App\Http\Controllers;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $kelurahans = Kelurahan::all();
        return view('kelurahan.index', compact('kelurahans'));
    }
}
   