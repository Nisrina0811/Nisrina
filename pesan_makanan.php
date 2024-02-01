<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Pemesanan Makanan</title>
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
    border: 2px solid #FFFFFF;
	background-color: rgba(255, 255, 255, 0.4);
}
</style>
</head>
<body>
<div id="container">
    <div id="header">
        <h1>Pemesanan Makanan</h1>
    </div>
    <div id="menu">
 		 <p><a href="logout.php">Logout</a></p>
    </div>
    <div id="content">
        <?php
//        session_start();
//        // Periksa apakah email ada di session, jika tidak redirect ke halaman 			login
//        if (!isset($_SESSION['email'])) {
//            header("Location: form_login.php");
//            exit();
//        }
//        // Ambil email dari session
//        $email = $_SESSION['email'];
//
//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
//            // Simpan data makanan ke dalam session
//            $makanan = $_POST['makanan'];
//            $_SESSION['makanan'] = $makanan;   
//            header("Location: pesan_minuman.php");
//            exit();
//        }
		// Periksa apakah email ada di cookie, jika tidak redirect ke halaman login
        if (!isset($_COOKIE['email'])) {
            header("Location: form_login.php");
            exit();
        }
        // Ambil email dari cookie
        $email = $_COOKIE['email'];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Simpan data makanan ke dalam cookie
            $makanan = $_POST['makanan'];
            setcookie('makanan', $makanan, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
            header("Location: pesan_minuman.php");
            exit();
        }
        ?>
        <p>Email Anda: <?php echo $email; ?></p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="makanan">Pilih Makanan:</label>
			<br>
            <input type="radio" id="mie_ayam" name="makanan" value="Mie Ayam">
			<label for="mie_ayam">Mie Ayam</label><br>

			<input type="radio" id="nasi_goreng" name="makanan" value="Nasi Goreng">
			<label for="nasi_goreng">Nasi Goreng</label><br>

			<input type="radio" id="sate_ayam" name="makanan" value="Sate Ayam">
			<label for="sate_ayam">Sate Ayam</label><br>
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
kode php diletakkan sebelum form
		//Ambil bagian depan dari alamat emai
		$email_parts = explode('@', $email);
		$email_username = $email_parts[0];

		//Ambil nama depan dari alamat email
		$email_name_parts = explode('.', $email_username);
		$email_first_name = ucfirst($email_name_parts[0]); //Ambil dan ubah menjadi huruf kapital

		 //Ubah teks Email Anda menjadi Login Anda: (nama depan dari email)
		echo "Login Anda: $email_first_name";		
-->