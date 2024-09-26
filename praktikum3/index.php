<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>praktikum</title>
</head>
<body>
    <h1>konsep pewarisan</h1>
    <div class="">
        <?php
        include "orangBiasa.php";
        include "OrangInggris.php";
        include "mahasiswa.php";

        $james = new OrangBiasa('james');
        $james->ucapSalam();
        echo "<br>";

        $parto = new OrangInggris('parto');
        $parto->ucapSalam ();
        echo "<br>";

        $emely = new mahasiswa('emely');
        $emely->ucapSalam ();
        echo "<br>";
        $emely->setNim("701230003");
        $emely->setProdi ("Sistem Informasi");

        $nilaiEmely = new nilai();
        $nilaiEmely->setTugas(90);
        $nilaiEmely->setUts(76);
        $nilaiEmely->setUAs(78);

        $emely->setNilai($nilaiEmely);
        $emely->tampilkanData();
        ?>
    </div>
</body>
</html>