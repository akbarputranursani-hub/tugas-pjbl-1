<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Hasil Pengiriman</h2>

<?php
// Cek apakah form dikirim
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['pesan'])) {

    $nama  = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Pesan:</strong><br>$pesan</p>";

} else {
    echo "<p>Form belum dikirim dengan benar.</p>";
}
?>

<br>
<a href="index.php">⬅ Kembali ke Form</a>

</body>
</html>
