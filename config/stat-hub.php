<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Base URI for stat services
    |--------------------------------------------------------------------------
    |
    | This is the base URI used to make requests to the stat service.
    |
    */

    'base_uri' => env('STAT_BASE_URI', 'http://stat.loc'),
    
    /*
    |--------------------------------------------------------------------------
    | Image endpoint path
    |--------------------------------------------------------------------------
    |
    | The path to append to the base_uri for image requests.
    |
    */
    
    'image_path' => '/img',
    
    /*
    |--------------------------------------------------------------------------
    | Hit tracking endpoint path
    |--------------------------------------------------------------------------
    |
    | The path to append to the base_uri for hit tracking requests.
    |
    */
    
    'hit_path' => '/hit',
];
