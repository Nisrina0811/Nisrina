<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>REGISTRASI</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
	<h2>REGISTRASI PENGGUNA BARU</h2>
    <form action="register_proses.php" method="post">
                <div align="center">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
			<br>
        </div>
        <div align="center">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
			<br><br>
        </div>
        <div align="center">
            <button type="submit" name="login"><b>Daftar</b></button>
        </div>
    </form>
	<p align="center">Sudah punya akun? <a href="form_login.php">Kembali ke Halaman Login</a></p>
</body>
</html>