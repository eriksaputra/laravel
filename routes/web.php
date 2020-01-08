<?php

Route::get('/', function () {
    return view('welcome');
});

// Route basic
Route::get('/about', function() {
return '<h1>Hallo guys!</h1>'
.'Selamat datang di webapp Erick<br>'
.'Laravel, emang keren guys!.';
});

Route::get('profil',function()
{
    return view('biodata');
});

// Route::get('profil1',function()
// {
//     return view('erik1');
// });

// Route::get('profil2',function()
// {
//     return view('erik2');
// });

// Route::get('profil3',function()
// {
//     return view('erik3');
// });

// Route::get('profil4',function()
// {
//     return view('erik4');
// });

// Route::get('profil5',function()
// {
//     return view('erik5');
// });

// Route parameter

Route::get('pesan/{makan}/{minum}/{total}',function($mkn,$mnm,$total){
    return 'Makanan yang saya pesan adalah : <b>'.$mkn.'</b><br>
            Minuman yang saya pesan adalah : <b>'.$mnm.'</b><br>
            Total harga yang saya pesan adalah : <b>' .$total. '</b>';
});
