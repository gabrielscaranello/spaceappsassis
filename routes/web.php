<?php
Route::get('/{any?}', function () {
    return View::make('app');
})->where('any', '.*');
