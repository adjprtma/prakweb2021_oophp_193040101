<?php 
/* 
Adji Pratama
193040101
https://github.com/adjprtma/prakweb2021_oophp_193040101/tree/main
Pertemuan 3 - 24 September 2021
Praktikum Web 
OOP DASAR pada PHP #12 - Constant
Mempelajari Constant
*/ 

// define('NAMA', 'Adji Pratama');

// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;



// class Coba {
//    const NAMA = 'Adji';
// }

// echo Coba::NAMA;



// echo __FILE__;



// function coba () {
//     return __FUNCTION__;
// }

// echo coba();



class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;



?>