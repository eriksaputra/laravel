<?php

use Illuminate\Database\Seeder;

class ErikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $data = [
        ['nama'=>'Erik Saputra','jabatan'=>'Manager','jk'=>'laki-laki','alamat'=>'nata endah','agama'=>'islam','total_gaji'=>'1500000'],
        ['nama'=>'Irsyal fauzan','jabatan'=>'Kepala lab','jk'=>'laki-laki','alamat'=>'tki 3','agama'=>'islam','total_gaji'=>'600000'],
        ['nama'=>'Resawan','jabatan'=>'OB','jk'=>'laki-laki','alamat'=>'Rancamanyar','agama'=>'islam','total_gaji'=>'200000'],
        ['nama'=>'Alghani','jabatan'=>'Kepala bengkel','jk'=>'laki-laki','alamat'=>'Bojong','agama'=>'islam','total_gaji'=>'100000'],
        ['nama'=>'Kang candra','jabatan'=>'Guru produktif','jk'=>'laki-laki','alamat'=>'sayuran','agama'=>'islam','total_gaji'=>'2000000']
        ];
        // masukkan data ke database
        DB::table('gajis')->insert($data);
    }
}
