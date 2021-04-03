<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function Kelas()
    {

    $kelas = \App\Kelas::all();
    return view('admin.index', compact('kelas'));
}
}
