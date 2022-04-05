<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/data/search', function () {
    $mahasiswa = DB::table('mahasiswa')->where('nama', 'like', '%' . request('search') . '%')->paginate(3);
    return view('mahasiswa.index', compact('mahasiswa'));        
});
