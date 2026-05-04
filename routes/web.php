<?php

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

Route::get('img', function () {
    $client = app(Client::class);
    $resp = $client->request('GET', config('stat-hub.image_path'));

    return $resp->getBody();
});

Route::get('hit', function () {
    $client = app(Client::class);
    $client->request('POST', config('stat-hub.hit_path'), [
        'form_params' => [
            'data'      => request()->all(),
            'header'    => request()->header(),
            'client_ip' => request()->getClientIp(),
        ],
    ]);

    return response('', 204);
})->name('hit');
