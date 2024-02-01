<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Pemesanan Minuman</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('jamur.jpg');;
    }
    #container {
        width: 600px;
        margin: 20px auto;
    }
    #header {
        text-align: center;
        padding: 10px;
    }
    #menu {
        height: 200px;
        width: 100px;
        float: left;
        padding: 10px;
		box-sizing: border-box; 
    }
    #content {
        height: 200px;
        width: 500px;
		float: left;
        padding: 10px;
		box-sizing: border-box;
    }
    #footer {
        clear: both;
        text-align: center;
        padding: 10px;
    }
	#header, #menu, #content, #footer {
    border: 2px solid #FFFFFF; /* Tambahkan border dengan warna putih */
	background-color: rgba(255, 255, 255, 0.4);
}
</style>
</head>
<body>
<div id="container">
    <div id="header">
        <h1>Pemesanan Minuman</h1>
    </div>
    <div id="menu">
 		 <p><a href="logout.php">Logout</a></p>
    </div>
    <div id="content">
        <?php
        //session_start();
        // Periksa apakah email dan makanan ada di session, jika tidak redirect ke halaman pemesanan
		//if (!isset($_SESSION['email']) || !isset($_SESSION['makanan'])) {
		//	header("Location: pesan_makanan.php");
		//	exit();
		//}
		// Ambil email dan makanan dari session
		//$email = $_SESSION['email'];
		//$makanan = $_SESSION['makanan'];
//
		//if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Simpan data minuman ke dalam session
			//$minuman = $_POST['minuman'];
			//$_SESSION['minuman'] = $minuman;
			//header("Location: halaman_pemesanan.php");
			//exit();
		//}
		// Periksa apakah email dan makanan ada di cookie, jika tidak redirect ke halaman pemesanan
		if (!isset($_COOKIE['user_email']) || !isset($_COOKIE['makanan'])) {
			header("Location: pesan_makanan.php");
			exit();
		}
		// Ambil email dan makanan dari cookie
		$email = $_COOKIE['user_email'];
		$makanan = $_COOKIE['makanan'];

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Simpan data minuman ke dalam cookie
			$minuman = $_POST['minuman'];
			setcookie('minuman', $minuman, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari (dalam detik)
			header("Location: halaman_pemesanan.php");
			exit();
		}
		?>
        <p>Email Anda: <?php echo $email; ?></p>
		Makanan yang dipesan: <?php echo $makanan; ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="minuman">Pilih Minuman:</label>
			<br>
            <input type="radio" id="air_mineral" name="minuman" value="Air Mineral">
			<label for="air_mineral">Air Mineral</label><br>

			<input type="radio" id="es_teh" name="minuman" value="Es Teh">
			<label for="es_teh">Es Teh</label><br>

			<input type="radio" id="jus_jeruk" name="minuman" value="Jus Jeruk">
			<label for="jus_jeruk">Jus Jeruk</label><br>
            <button type="submit">Pesan</button>
        </form>
    </div>
    <div id="footer">
        Created by <b>Nisrina Yumna Qurrotu'ain</b>
    </div>
</div>
</body>
</html>
	
<!--
kode php
		//Ambil bagian depan dari alamat emai
		$email_parts = explode('@', $email);
		$email_username = $email_parts[0];

		//Ambil nama depan dari alamat email
		$email_name_parts = explode('.', $email_username);
		$email_first_name = ucfirst($email_name_parts[0]); //Ambil dan ubah menjadi huruf kapital

		 //Ubah teks Email Anda menjadi Login Anda: (nama depan dari email)
		echo "Login Anda: $email_first_name";		
-->
