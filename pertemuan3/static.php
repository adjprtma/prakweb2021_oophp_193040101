<?php 
/* 
Adji Pratama
193040101
https://github.com/adjprtma/prakweb2021_oophp_193040101/tree/main
Pertemuan 3 - 24 September 2021
Praktikum Web 
OOP DASAR pada PHP #11 - Static Keyword
Mempelajari Static Keyword
*/ 

// class ContohStatic {
//    public static $angka = 1;

//    public static function halo() {
//        return "Halo " . self::$angka++ . " kali. ";
//    }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . "kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
?>