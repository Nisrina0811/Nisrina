<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FORM LOGIN</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
	<h2 align="center"> PROSES LOGIN</h2>
    <form action="proses_login.php" method="post">
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
            <button type="submit" name="login"><b>Login</b></button>
        </div>
    </form>
	<p align="center">Belum punya akun? <a href="register_form.php">Daftar disini</a></p>
</body>
</html>