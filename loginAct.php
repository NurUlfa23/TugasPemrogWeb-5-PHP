<?php // Membedakan perintah html dan php
if (empty($_POST['nama'])||empty($_POST['email'])) {
	header("Location:empty.php");
} else {
echo "<center>Nama : ".$_POST['nama']."</center><br>"; // Variabel nama yang akan dideklarasikan
echo "<center>Email : ".$_POST['email']."</center><br>"; // Variabel email yang akan dideklarasikan
date_default_timezone_set('Asia/Jakarta');
echo 'Indonesian Timezone:'.date('d-m-Y H:i:s');
}
?>