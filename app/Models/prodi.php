<?php

namespace App\Models;

class Prodi
{
    public $kode;
    public $name;
    public $kaprodi;

    public function __construct($kode, $name)
    {
        $this->kode = $kode;
        $this->name = $name;
    }
}