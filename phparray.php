<html>
<head>
	<title> Pemrograman PHP dengan Array </title>
</head>
<body>
<?php // Membedakan perintah html dan php
// Penulisan array dapat dibuat sebagi berikut
$nama[] = "Nur"; // Variabel Nur
$nama[] = "Ulfa"; // Variabel Ulfa
$nama[] = "Mauludina"; // Variabel Mauludina
echo $nama[1 ]. $nama[2] . $nama[0]; // Urutan nama yang tampil pada perintah echo
echo "<br>";
// Menghitung jumlah elemen array
$jum_array = count($nama); // Menghitung jumlah elemen array
echo "jumlah elemen array = ".$jum_array // Menampilkan hasil dari jumlah elemen array
?>
</body>
</html>