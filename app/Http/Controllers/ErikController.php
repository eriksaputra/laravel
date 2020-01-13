<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErikController extends Controller
{
    public function hallo()
    {
        return "Hallo Dunia";
    }
    public function dunia()
    {
        return "Dunia";
    }
    public function nama()
    {
        return "Erick Saputra";
    }
    public function alamat()
    {
        return "Komp Nata Endah 2";
    }
    public function jk()
    {
        return "Laki-laki";
    }
    public function agama()
    {
        return "Islam";
    }
    public function warga()
    {
        return "Indonesia";
    }
    public function hobi()
    {
        return "Bermain Futsal";
    }
    public function kelas()
    {
        return "XI RPL 2";
    }
    public function sekolah()
    {
        return "SMK ASSALAAM BANDUNG";
    }
    public function teman()
    {
        return "RIzky Ikoy";
    }
    public function musuh()
    {
        return "Tidak Ada";
    }
    public function jeniskucing($warna=null)
    {
    if (isset($warna)) {
        $warna = " warna kucing kamu : <b>$warna</b>";
        echo $warna;
    }
    if (!$warna) {
        return "warna kucing kamu belum di isi";
    }
    }
    public function beli($ayam = null,$harga = null)
    {
    if ($ayam){
        $ayam = " Anda membeli : <b>$ayam</b>";
        echo $ayam;
    }
    if (!$ayam && !$harga) {
        return "Silahkan masukan item terlebih dahulu.";
    }
    if ($harga > 15000) {
        echo " Anda membeli ayam dengan ukuran Jumbo";

    }
    if ($harga < 15000 && $harga >= 7000) {
        echo " Anda membeli ayam dengan ukuran Medium";

    }
    if ($harga < 7000) {
        echo " Anda membeli ayam dengan ukuran Small";

    }
    }
}
