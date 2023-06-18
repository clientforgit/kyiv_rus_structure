<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Principality;
use \App\Models\Lord;
use App\Models\Boyar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/principalities');
})->name('principalities');

Route::get('/principalities', function () {
    $principalities = Principality::all();
    return view('principalities_page', ['principalities' => $principalities]);
})->name('principalities');

Route::get('/principality/{id}', function (Request $request) {
    $principality = Principality::find($request->id);
    return view('principality', ['principality' => $principality]);
})->name('lords');

Route::get('/lord/{id}', function (Request $request) {
    $lord = Lord::find($request->id);
    return view('lord', ['lord' => $lord]);
})->name('boyars');

Route::get('/boyar/{id}', function (Request $request) {
    $boyar = Boyar::find($request->id);
    return view('boyar', ['boyar' => $boyar]);
})->name('boyar_lords');

Route::get('/boyar_lord/{id}', function (Request $request) {
    $lord = Lord::find($request->id);
    return view('boyar_lord', ['lord' => $lord]);
})->name('lord_principalities');
