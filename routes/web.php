<?php

use Elastic\Elasticsearch\ClientBuilder;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

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
    $client = ClientBuilder::create()
        ->setHosts(config('database.connections.elasticsearch.hosts'))
        ->build();

// Example search query
    $params = [
        'index' => 'my_index',
        'body' => [
            'query' => [
                'match' => [
                    'field' => 'search_keyword',
                ],
            ],
        ],
    ];

    return $client->search($params);
});

Route::get('companies', [CompanyController::class,'index']);
