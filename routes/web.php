<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

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
        ])->get('http://202.92.129.159/api/pythagorean/25');

    // get response
    $json = $response->json();

    return view('welcome', ["id" => $id, "json"=>$json]);
//     abort(404);
});
