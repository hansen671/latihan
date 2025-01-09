<?php

namespace App\Controllers;

class Barang extends BaseController
{
    public function index(): string
    {
        return view('barang/index');
    }
}
