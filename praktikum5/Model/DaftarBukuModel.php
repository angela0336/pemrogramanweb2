<?php

require_once "buku.php";

class DaftarBukuModel{

public function getData (){
    $daftar_buku = array(
        new Buku('belajar pemrograman web','robert.T.','informatika','2024'),
        new Buku('Matematika Diskrit', 'Rinaldi M.', 'Andi Publisher','2017'),
        new Buku('kalkulus','Emely S.','Airlangga','2024'),
        new Buku('Metodelogi Penelitian','James W.','UIN Publisher','2018'),
    );

    return $daftar_buku;
}  

//database: perpustakaan
//table: buku (5)
//          id it (11) primary key auto_incriment,
//          judul varchar (150),
//          pengarang varchar (150),
//          penerbit varchar (150),
//          tahun int


}