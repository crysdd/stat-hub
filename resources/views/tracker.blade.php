@php
    $result = Illuminate\Support\Facades\Cache::remember('stat-hub.image', 60 * 60 * 24, function () {
        $client = app(GuzzleHttp\Client::class);
        $resp = $client->request('GET', config('stat-hub.image_path'));

        return $resp->getBody()->__toString();
    });
@endphp
{!! $result !!}
