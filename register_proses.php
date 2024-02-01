<?php
session_start();

// Lakukan koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amikpgri";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Lindungi dari serangan SQL Injection
    $email = mysqli_real_escape_string($conn, $email);

    // Hash password sebelum menyimpan ke database
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk memasukkan pengguna baru ke dalam database
    $sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: form_login.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
