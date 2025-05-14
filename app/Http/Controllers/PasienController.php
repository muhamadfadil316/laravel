<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
{
        $pasiens = Pasien::with('kelurahan')->get();
        return view('pasien.index', compact('pasiens'));
    }
}
