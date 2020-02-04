<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a = "Aku Cinta Bandung";
        return view('latihan', compact('a'));
    }
    public function pass1()
    {
        $data = [
            ['nama' => 'Erick' , 'kelas' => 'XI RPL 2'],
            ['nama' => 'Irsyal' , 'kelas' => 'XI RPL 1'],
            ['nama' => 'Refana' , 'kelas' => 'XI RPL 3'],
        ];
        return view('latihan1', ['siswa' => $data]);
    }
    public function pass2()
    {
        $gajih = [
            ['Nama' => 'Erick Saputra', 'NIP' => '12345', 'Agama' => 'Islam', 'JK' => 'Laki-laki', 'Jabatan' => 'Manager', 'jam_kerja' => 251],
            ['Nama' => 'Suci Oktaviani', 'NIP' => '123456', 'Agama' => 'Islam', 'JK' => 'Perempuan', 'Jabatan' => 'Sekertaris', 'jam_kerja' => 150],
            ['Nama' => 'Irsyal fauzan', 'NIP' => '1234567', 'Agama' => 'Islam', 'JK' => 'Laki-laki', 'Jabatan' => 'Staff', 'jam_kerja' => 230]
        ];
        return view('latsol', ['gaji' => $gajih]);
    }
}
