<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\View\View;

class ProdiController extends Controller
{
    public function show(): View
    {
        $prodii = new Prodi("SI", "Sistem Informasi");
        $prodii->kaprodi = "Tifany Nabarian M.TI";
        
        $prodii2 = new Prodi("TI", "Teknik Informatika");
        $prodii2->kaprodi = "Misma Asaja M.Kom";
        
        $prodii3 = new Prodi("BD", "Bisnis Digital");
        $prodii3->kaprodi = "Dr.Amalia Rahmah M.T";

        $ar_prodi = [$prodii, $prodii2, $prodii3];
        
        return view('prodi.index', [
            'judul' => 'Daftar Program Studi STT-NF',
            'list_prodi' => $ar_prodi
        ]);
    }
}
