<?php
use Illuminate\Http\Request;
use App\Seller\Services\ErpService;
use Carbon\Carbon;

// rota para limpar o Cache
Route::delete('cache', function () {
    if (\Cache::flush()) {
        return response()->json([], 200);
    }
    return response()->json([], 500);
});

// Rotas de autenticação
Route::group(['middleware' => ['api', 'cors'], 'prefix' => 'auth'], function ($router) {
    Route::post('login', 'Api\AuthController@login')->name('login');
    Route::post('logout', 'Api\AuthController@logout');
    Route::post('forgot', 'Api\AuthController@forgot');
    Route::post('refresh', 'Api\AuthController@refresh');
    Route::post('me', 'Api\AuthController@me');
    Route::post('check', 'Api\AuthController@check');
});

// //Rotas autenticadas
Route::group([ 'prefix' => '/', 'namespace' => 'Api\\', 'middleware' => ['auth:api', 'cors']], function ($router) {


    // rotas personalizadas

    //rotas resources
    Route::resources([
      'pre-register' => 'PreRegisterController'
    ]);
});


//Rotas Sem autenticaçao
Route::group(['prefix' => '/', 'namespace' => 'Api\\', 'middleware' => ['api', 'cors']], function ($router) {

    //rotas personalizadas
    Route::post('pre-register', 'PreRegisterController@store');


    // rotas resources
    Route::resources([]);
});
