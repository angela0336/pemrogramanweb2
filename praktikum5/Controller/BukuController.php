<?php

require_once "Model/DaftarBukuModel.php";

class BukuController{
    public function jalankan(){
        $dataModel = new DaftarBukuModel();

        //menggunakan model
        $dataModel =  new DaftarBukuModel();

        //mengirim datModel ke BukuView dan menampilkannya
        include "View/BukuView.php";

    }
}