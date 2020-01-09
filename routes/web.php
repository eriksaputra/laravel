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
// Route opsional parameter
Route::get('nama/{a?}',function($nama="erik saputra"){
    return 'Nama saya adalah : '.$nama;
});

Route::get('memesan/{pesan1?}/{pesan2?}/{total?}',function($psn=null,$pesan=null,$total=null){
    if (isset($psn)) {
        $psn = "Anda telah memesan $psn";
        echo $psn;
    }
    if (isset($pesan)) {
        $pesan = " & $pesan";
        echo $pesan;
    }
    if (isset($total)) {
        $total = " dengan total harga $total";
        echo $total;
    }
    if (!$psn && !$pesan && !$total) {
        return "Anda belum memesan sesuatu";
    }
});
