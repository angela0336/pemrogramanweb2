<?php

require_once "orang.php";
require_once "nilai.php";

class Mahasiswa extends Orang {
    protected $nim;
    protected $prodi;
    protected Nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setProdi($prodi){
        $this->prodi = $prodi;
    }

    public function setNilai ($nilai){
        $this->nilai = $nilai;
    }

    public function tampilkanData(){
        echo "nama : " . $this->nama . "<br>";
        echo "nim : " . $this->nim . "<br>";
        echo "prodi : " . $this->prodi . "<br>";
        echo "nilai tugas : ". $this->nilai->getTugas() . "<br>";
        echo "nilai uts : ". $this->nilai->getUts() . "<br>";
    }

}