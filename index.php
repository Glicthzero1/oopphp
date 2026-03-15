<?php

include "Mahasiswa.php";

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setData("A11.2000.00001", "Fulan", "Teknik Informatika");

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setData("A12.2000.00001", "Junior", "Sistem Informasi");

$mahasiswa3 = new Mahasiswa();
$mahasiswa3->setData("A11.2000.00003", "Budi", "Teknik Komputer");

echo "<h3>Data Mahasiswa 1</h3>";
$mahasiswa1->tampilkanData();

echo "<h3>Data Mahasiswa 2</h3>";
$mahasiswa2->tampilkanData();

echo "<h3>Data Mahasiswa 3</h3>";
$mahasiswa3->tampilkanData();
?>