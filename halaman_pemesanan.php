<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Pemesanan</title>
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
        <h1>Pesanan</h1>
    </div>
    <div id="menu">
 		 <p><a href="logout.php">Logout</a></p>
    </div>
    <div id="content">
        <?php
		//session_start();
		// Periksa apakah email, makanan, dan minuman ada di session, jika tidak redirect ke halaman pemesanan
		//if (!isset($_SESSION['email']) || !isset($_SESSION['makanan']) || !isset($_SESSION['minuman'])) {
		//	header("Location: halaman_pemesanan.php");
		//	exit();
		//}

		// Ambil email, makanan, dan minuman dari session
		//$email = $_SESSION['email'];
		//$makanan = $_SESSION['makanan'];
		//$minuman = $_SESSION['minuman'];
		// Periksa apakah email, makanan, dan minuman ada di cookie, jika tidak redirect ke halaman pemesanan
		if (!isset($_COOKIE['user_email']) || !isset($_COOKIE['makanan']) || !isset($_COOKIE['minuman'])) {
			header("Location: halaman_pemesanan.php");
			exit();
		}

		// Ambil email, makanan, dan minuman dari cookie
		$email = $_COOKIE['user_email'];
		$makanan = $_COOKIE['makanan'];
		$minuman = $_COOKIE['minuman'];
		?>
		
        <h2>Konfirmasi Pesanan</h2>
		<p>Email Anda: <?php echo $email; ?></p>
		Makanan yang dipesan: <?php echo $makanan; ?>
		<br>
		Minuman yang dipesan: <?php echo $minuman; ?>
		<br>
		<a href="terima_kasih.php"><button>Done</button></a>
	</div>
	
    <div id="footer">
        Created by <b>Nisrina Yumna Qurrotu'ain</b>
    </div>
</div>
</body>
</html>