<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Form Buku Tamu</h2>

<form action="proses.php" method="post">
    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Email</label>
    <input type="email" name="email" required>

    <label>Pesan</label>
    <textarea name="pesan" rows="5" required></textarea>

    <button type="submit">Kirim</button>
</form>

</body>
</html>
