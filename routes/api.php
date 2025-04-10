<?php

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Ruta para consultar datos por DNI
Route::get('/dni/{numero}', function ($numero) {
    $client = new Client();

    try {
        $response = $client->request('GET', 'https://api.apis.net.pe/v2/reniec/dni', [
            'query' => ['numero' => $numero],
            'headers' => [
                'Authorization' => 'Bearer apis-token-14278.NMBLDJYLy36K6z0KdbD73NI8pkMblKWH',
                'Accept' => 'application/json',
            ],
        ]);

        $body = $response->getBody()->getContents();
        return response()->json(json_decode($body));
    } catch (\Exception $e) {
        return response()->json(['error' => 'Error al consultar el API: ' . $e->getMessage()], 500);
    }
});
