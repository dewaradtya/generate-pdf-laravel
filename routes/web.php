<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');
Route::get('/po', [PDFController::class, 'PO'])->name('po');
Route::get('/home', [PageController::class, 'home']);
