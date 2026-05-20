<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Illuminate\Support\Facades\Response;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/project/tukang-print-dadakan', function () { // Untuk menampilkan halaman proyek Tukang Print Dadakan
    return view('project.tukang-print-dadakan');
});

Route::get('/project/website-portofolio', function () {
    return view('project.website-portofolio');
});

Route::post('/kontak', function (Request $request) {
    $data = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subjek' => 'required|string|max:255',
        'pesan' => 'required|string',
    ]);

    ContactMessage::create($data);

    return redirect('/#contact')->with('success', 'Pesan berhasil dikirim!');
})->name('kontak.store');

