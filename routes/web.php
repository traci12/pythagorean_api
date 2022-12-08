<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use App\Models\PythagoreanTbl;

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
    // get api db
    $pt = PythagoreanTbl::get();

    return view('welcome', ['id' => 0 ,'pt' => $pt]);
//     abort(404);
});

Route::post('/', function (Request $request) {

    // get all $id
    $id = $request->all()['value'];

    // get api $id
    $response = Http::withHeaders([
            'Content-Type' => 'application/vnd.api+json',
            'Accept' => 'application/vnd.api+json',
            'Authorization' => 'Bearer 1|bpFDJkAfsyEt42JfESS6h3WbzXd0vECfoC8LtUBb',
        ])->get('http://202.92.129.159/api/pythagorean/' . $id);

    // get response
    $json = $response->json();

    if($json) {
      // store to db
      $pt = new PythagoreanTbl;
      $pt->a = $json['A'];
      $pt->b = $json['B'];
      $pt->c = $json['C'];
      $pt->avg = $json['AVG'];
      $pt->save();
    }

    // get api db
    $pt = PythagoreanTbl::get();

    return view('welcome', ["id" => $id, "pt"=>$pt]);
//     abort(404);
});
