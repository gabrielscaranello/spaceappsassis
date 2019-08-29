<?php
// Route::get('/mail', function()
// {
//   $preregister = ['first_name' => "gabriel", "last_name"=> "scaranello"];
//   return view('mail.pre-register', compact('preregister'));
// });



Route::get('/{any?}', function () {
    return View::make('app');
})->where('any', '.*');
