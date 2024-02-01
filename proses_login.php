<style>
        body {
			font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f3f3;
			flex-direction: column;
			text-align: center;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
	}
</style>
<?php
session_start();
include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);

if ($row) {
    $_SESSION['email'] = $email;
	// Set cookie untuk menyimpan email
    //setcookie('user_email', $email, time() + (86400 * 30)); // Cookie berlaku selama 30 hari (dalam detik)
    header("Location: pesan_makanan.php");
} else {
    echo "<span style='color: blue'>Account Anda <b>belum terdaftar</b> di web kami</span>";
    echo "<a href='register_form.php'><button>Registrasi</button></a>";
}
?>
	
<!--
//setcookie('email', $email, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari (dalam detik)
            Mengatur jenis font yang akan digunakan untuk teks dalam elemen body.
			font-family: Arial, sans-serif;
			
			Menerapkan model tata letak flexbox pada elemen body, memungkinkan pengaturan posisi dan tata letak elemen anak.
            display: flex;
			
			Memusatkan elemen secara horizontal di dalam body menggunakan flexbox.
            justify-content: center;
			
			Memusatkan elemen secara vertikal di dalam body menggunakan flexbox.
            align-items: center;
			
			Mengatur tinggi elemen body menjadi 100% dari tinggi viewport (tinggi layar).
            height: 100vh;
			
			Menghilangkan margin bawaan pada body.
            margin: 0;
			
			Mengatur warna latar belakang body menjadi abu-abu muda.
            background-color: #f3f3f3;
            
			Properti ini mengatur arah tata letak flexbox secara vertikal. Saat nilainya diatur menjadi column, elemen-elemen dalam kontainer flexbox akan ditata dalam satu kolom dari atas ke bawah. Ini berarti elemen-elemen di dalamnya akan disusun secara vertikal satu di bawah yang lain.
			flex-direction: column;
            
			Properti ini mengatur penempatan teks di dalam sebuah elemen. Ketika digunakan pada elemen dengan display flex (dalam kasus ini, elemen body), properti ini akan memengaruhi penempatan teks secara horizontal ke tengah dalam elemen tersebut. Dalam konteks kode yang Anda berikan, ini akan memusatkan teks dan elemen lainnya secara horizontal di tengah-tengah layar.
			text-align: center;
        }
		Mendefinisikan gaya untuk elemen tombol (button).
        button {
            margin-top: 20px; Memberikan jarak atas sebesar 20 piksel antara tombol dengan elemen sebelumnya.
            padding: 10px 20px; Memberikan ruang bantal (padding) 10 piksel atas dan bawah, serta 20 piksel kiri dan kanan pada tombol.
            background-color: #007bff; Menetapkan warna latar belakang tombol menjadi biru muda (#007bff).
            color: white; Mengatur warna teks pada tombol menjadi putih.
            border: none; Menghilangkan border pada tombol.
            border-radius: 4px; Memberikan sudut melengkung pada sudut tombol dengan radius 4 piksel.
            cursor: pointer; Mengubah ikon kursor saat diarahkan ke tombol menjadi tanda panah (menunjukkan elemen dapat diklik).
        }
		Mendefinisikan gaya tombol saat pointer mouse berada di atasnya (keadaan hover)
        button:hover {
			Mengubah warna latar belakang tombol menjadi biru tua (#0056b3) saat dihover.
            background-color: #0056b3;
	}
-->
