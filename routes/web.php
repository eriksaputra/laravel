<?php

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route basic

// Route::get('/about', function() {
//     return '<h1>Hallo guys!</h1>'
//             .'Selamat datang di webapp Erick<br>'
//             .'Laravel, emang keren guys!.';
// });

// Route::get('profil',function()
// {
//     return view('biodata');
// });

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

// // Route parameter

// Route::get('pesan/{makan}/{minum}/{total}',function($mkn,$mnm,$total){
//     return 'Makanan yang saya pesan adalah : <b>'.$mkn.'</b><br>
//             Minuman yang saya pesan adalah : <b>'.$mnm.'</b><br>
//             Total harga yang saya pesan adalah : <b>' .$total. '</b>';
// });
// // Route opsional parameter
// Route::get('nama/{a?}',function($nama="erik saputra"){
//     return 'Nama saya adalah : '.$nama;
// });

Route::get('memesan/{pesan1?}/{pesan2?}/{total?}',function($psn=null,$pesan=null,$total=null){
    if (isset($psn)) {
        $psn = "Anda telah memesan <b>$psn</b>";
        echo $psn;
    }
    if (isset($pesan)) {
        $pesan = " & <b>$pesan</b>";
        echo $pesan;
    }
    if (isset($total)) {
        $total = " dengan total harga <b>$total</b>";
        echo $total;
    }
    if (!$psn && !$pesan && !$total) {
        return "Anda belum memesan sesuatu";
    }
});
// model Route
Route::get('/testmodel',function(){
    $query = App\Post::all();
    return $query;
});
Route::get('/testmodel1',function(){
    $a = App\Post::find(2);
    return $a;
});
Route::get('/testmodel2',function(){
    $query = App\Post::where('title','like','%dapat%')->get();
    return $query;
});
Route::get('/testmodel3',function(){
    $post = App\Post::find(2);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});
Route::get('/testmodel4',function(){
    $post = App\Post::find(1);
    $post->delete();
});
Route::get('/testmodel5',function(){
    $post = new App\Post;
    $post->title = "1 Tips Dapat Jodoh";
    $post->content = "ganteng Banyak Uang";
    $post->save();
    return $post;
});

// mencoba query model
Route::get('/gaji',function(){
    $query = App\Gaji::all();
    return $query;
});
Route::get('/gaji1',function(){
    $post = App\Gaji::find(10);
    $post->delete();
});
Route::get('/gaji2',function(){
    $query = App\Gaji::where('alamat','=','rancamanyar')->get();
    return $query;
});
Route::get('/gaji3',function(){
    $query = App\Gaji::select('id','nama','alamat')->get();
    return $query;
});
// parameter model
Route::get('/gaji4/{id}',function($id){
    $query = App\Gaji::find($id);
    return $query;
});
Route::get('tambahdata',function(){
    $gaji = new App\Gaji();
    $gaji->Nama ='Indah Mambo';
    $gaji-> Jabatan ='Sekertaris';
    $gaji -> Jk ='Perempuan';
    $gaji -> Alamat ='Bojong Yellow';
    $gaji -> Agama ='Islam';
    $gaji -> Total_gaji ='500000000';
    $gaji ->save();
    return $gaji;
});
// belajar controller
Route::get('halo','ErikController@hallo');
Route::get('dunia','ErikController@dunia');
Route::get('1','ErikController@nama');
Route::get('2','ErikController@alamat');
Route::get('3','ErikController@jk');
Route::get('4','ErikController@agama');
Route::get('5','ErikController@warga');
Route::get('6','ErikController@hobi');
Route::get('7','ErikController@kelas');
Route::get('8','ErikController@sekolah');
Route::get('9','ErikController@teman');
Route::get('10','ErikController@musuh');
Route::get('warnakucing/{warna?}','ErikController@jeniskucing');
Route::get('beli/{ayam?}/{harga?}','ErikController@beli');
// crud book
Route::get('book','BookController@index');
Route::get('book-create/{judul}','BookController@create');
Route::get('book/{id?}','BookController@show');
Route::get('book-edit/{id}/{jdl}','BookController@edit');
Route::get('book-delete/{id}','BookController@delete');
Route::get('tampil','BookController@tampil');
Route::get('tampil1','BookController@tampil1');


// artikel RESOURCE
// Route::get('artikel','ArtikelController@index');
// Route::get('artikel/create','ArtikelController@create');
// Route::POST('artikel','ArtikelController@store');
// Route::get('artikel/{id}','ArtikelController@show');
// Route::get('artikel/{id}/edit','ArtikelController@edit');
// Route::PUT('artikel/{id}','ArtikelController@update');
// Route::DELETE('artikel/{id}','ArtikelController@destroy');

Route::resource('artikel','ArtikelController');

// passing data
Route::get('passing','PracticeController@pass');
Route::get('passing1','PracticeController@pass1');
Route::get('latsol','PracticeController@pass2');
Route::get('barang','BarangController@index');
