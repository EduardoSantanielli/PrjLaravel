<?php
Route::get('/', function(){
    return view('welcome');
});


Route::get('/hello', function(){
    return 'fodase';
});

Route::get('/r1', function(){
    return '<h1>ROTA1</h1>';
});

Route::get('/r2', function(){
    return '<h2>ROTA2</h2>';
});
Route::get('/r3', function(){
    return '<h3>ROTA3</h3>';
});