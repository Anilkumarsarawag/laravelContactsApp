<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contacts.index');
});

Route::resource('contacts', ContactController::class);
Route::post('/contacts/import', [ContactController::class, 'importXML'])->name('contacts.import');