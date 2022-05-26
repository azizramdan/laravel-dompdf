<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Faker\Factory;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pdf/{loop?}', function (Request $request, $loop = 1) {
    $faker = Factory::create();
    $data = $faker->paragraphs(100);

    $pdf = Pdf::loadView('pdf', compact('loop', 'data'));

    return $pdf->download('pdf.pdf');
});
