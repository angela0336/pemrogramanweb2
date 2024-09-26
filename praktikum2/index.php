<?php
    include "Angela.php"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hallo angela</title>
</head>
<body>
    <h1>hello praktikum 2</h1>
    <div>
          <?php
         //proses intansiasi
         $mahasiswa = new Angela('Angela Portuna');

         //menggunakan setter dan getter
         $mahasiswa->setNama('angela portuna');
         $mahasiswa->setTglLahir('2006-03-03');
         $mahasiswa->setAlamat('jambi');

         echo "<Br>";
         echo "Data mahasiswa ". $mahasiswa->getNama() . "<br>";
         echo "nama : " . $mahasiswa->getNama() . "<br>";
         echo "Tgl Lahir :" . $mahasiswa->getTglLahir() . "<br>";
         echo "Alamat : " . $mahasiswa->getAlamat() . "<br>";

         //memanggil method
         $mahasiswa->ucapkanSalam();

         echo "<Br>";
         $mahasiswa2 = new Angela('cantik');

         $mahasiswa2->ucapkanSalam();
        ?>
    </div>

</body>
</html>