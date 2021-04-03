<?php

namespace App\Http\Controllers;
use App\Kelas;
use App\Jurusan;
use App\Mahasiswa;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function Index()
    {
        $siswa = Mahasiswa::join('kelas','kelas_id','=','kelas.id')
                        ->join('jurusan','jurusan_id','=','jurusan.id')
                        ->select('nama','kelas.kelas as kelas','jurusan.name as jurusan','alamat')
                        ->get();

        $kelas = Kelas::all();

        $jurusan = Jurusan::all();
        return view('admin.siswa',compact('siswa','kelas','jurusan'));
    }
}
