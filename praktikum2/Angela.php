<?php
class Angela{
    //property
    private string $nama;
    private string $tglLahir;
    public string $alamat;

    //constructornya
    public function __construct($nama)
    {
        $this->nama = $nama;
        echo "object ". $this->nama ."dibuat <br>";
        $this->tampilkanPassword();
    }

    //destructor
    public function __destruct()
    {
        echo "object ". $this->nama ."dihapus <br>";
    }

    //method
    public function ucapkanSalam(){
        echo "<h2>halo perkenalkan nama saya ". $this->nama."</h2";
    }

        
    private function tampilkanPassword(){
        echo "rahasia1234";
    }

    //setter
    public function setNama($nama){
        $this->nama = $nama;
    }

    //getter
    public function getNama(){
        return $this->nama;
    }

    public function setTglLahir($tglLahir){
        $this->tglLahir = $tglLahir;
    }

    public function getTglLahir(){
        return $this->tglLahir;
    }

    public function getAlamat(){
        return $this->alamat;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }
}