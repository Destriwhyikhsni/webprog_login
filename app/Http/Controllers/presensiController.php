<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
class presensiController extends Controller 
{ 
    public function berandaBackend() 
    { 
        return view('backend.v_beranda.index', [ 
            'judul' => 'Halaman Beranda',
        ]); } }