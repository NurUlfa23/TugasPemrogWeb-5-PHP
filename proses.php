<?php // Membedakan perintah html dan php
include "inc.php"; // sumber file inc.php
echo $angka; // Variabel angka yang akan dipanggil
echo "<br>";
if ($angka==100){ // Eksekusi variabel angka 100
	echo "Memuaskan"; // Output : Memuaskan
} elseif ($angka<100&&$angka>=85) { // Eksekusi variabel angka kurang dari 100 dan lebih dari 85
	echo "Sangat Baik"; // Output :Sangat Baik
} elseif ($angka<85&&$angka>=70) { // Eksekusi variabel angka kurang dari 85 dan lebih dari 70
	echo "Baik"; // Output : Baik
} elseif ($angka<70&&$angka>=55) { // Eksekusi variabel angka kurang dari 70 dan lebih dari 55
	echo "Cukup"; // Output : Cukup
} elseif ($angka<55&&$angka>=0) { // Eksekusi variabel angka kurang dari 55 dan lebih dari 0
	echo "Kurang"; // Output : Kurang
}
?>