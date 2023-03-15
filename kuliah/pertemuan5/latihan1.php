<?php 
// ARRAY
//Membuat array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Zuhdi', 18, false];
$binatang = ['🐈', '🐒' , '🐇', '🦆', '🐔'];

//mencetak array
//Mencetak 1 elemen di dalan array menggunakan echo
echo $hari[2];
echo"<hr>";

//Mencetak semua isi array
//var_dump, print_r
var_dump($hari);
echo"<br>";
print_r($bulan);
echo"<br>";
var_dump($myArray);
echo"<br>";
print_r($binatang);
echo"<hr>";

//Manipulasi Array
//menambahkan elemen menggunakan index
$hari[3] = 'Kamis';
print_r($hari);
echo"<br>";

//Menambahkan elemen di akhir array menggunakan []
$hari[] = "Jum'at";
$hari[] = "Sabtu";
print_r($hari);
echo"<hr>";

//Menambah elemen di akhir array menggunakan array_push
array_push($bulan, "April", "Mei", "Juni");
print_r($bulan);
echo"<br>";

//Menambah elemen di awal array menggunakan array_unshift
array_unshift($binatang, '🐍', '🐉');
print_r($binatang);
echo"<hr>";

//Menghapus elemen di belakang array dengan array_pop
array_pop($hari);
array_pop($hari);
array_shift($hari);
print_r($hari);
echo"<hr>";

//Menghapus element di depan array dengan array_shift
array_shift($bulan);
print_r($bulan);
?>