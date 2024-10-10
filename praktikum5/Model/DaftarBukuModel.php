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

public function getKolomTabel(){
    $kolom_tabel = array(
        'no','judul','pengarang','penerbit','tahun'
    );

    return $kolom_tabel;
}

}