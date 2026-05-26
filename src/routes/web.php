<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Models\ContactMessage;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Livewire asset handling if using sub folder in domain
|--------------------------------------------------------------------------
| NOTE: Do Not Remove
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $profile = \App\Models\Profile::first();
    $projects = \App\Models\Project::latest()->get();
    $skills = Skill::latest()->get();

    return view('welcome', compact(
        'profile',
        'projects',
        'skills'
    ));
});

/*
|--------------------------------------------------------------------------
| Dynamic Project Detail
|--------------------------------------------------------------------------
*/

Route::get('/project/{slug}', function ($slug) {
    $project = Project::with('progresses')
        ->where('slug', $slug)
        ->firstOrFail();

    return view('project.detail', compact('project'));
})->name('project.detail');
/*
|--------------------------------------------------------------------------
| Contact Form
|--------------------------------------------------------------------------
*/

Route::post('/kontak', function (Request $request) {
    $data = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subjek' => 'required|string|max:255',
        'pesan' => 'required|string',
    ]);

    ContactMessage::create($data);

    return redirect()->to('/#contact')->with('success', 'Pesan berhasil dikirim!');
})->name('kontak.store');
