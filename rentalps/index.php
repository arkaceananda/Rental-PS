<?php
require_once "classes/PS.php";
require_once "classes/Member.php";
require_once "classes/Rental.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental PlayStation</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/0/00/PlayStation_logo.svg" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>🎮 Rental PlayStation</h1>
        <form action="process.php" method="POST">

            <div class="form-group">
                <label for="nama">👤 Nama Penyewa:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label for="jenis_ps">🎮 Jenis PlayStation:</label>
                <select id="jenis_ps" name="jenis_ps" required>
                    <option value="">Pilih Jenis PlayStation</option>
                    <option value="PS2">PlayStation 2 - Rp 5.000/jam</option>
                    <option value="PS3">PlayStation 3 - Rp 7.000/jam</option>
                    <option value="PS4">PlayStation 4 - Rp 10.000/jam</option>
                    <option value="PS5">PlayStation 5 - Rp 15.000/jam</option>
                </select>
            </div>

            <div class="form-group">
                <label for="lama">⏰ Lama Sewa (jam):</label>
                <input type="number" id="lama" name="lama" min="1" max="24" placeholder="Berapa jam?" required>
            </div>

            <div class="form-group">
                <label for="member">💎 Jenis Membership:</label>
                <select id="member" name="member" required>
                    <option value="">Pilih Membership</option>
                    <option value="Non-member">👀Non-member</option>
                    <option value="Gold">🎟️Gold Member</option>
                    <option value="Platinum">🎫Platinum Member</option>
                </select>
            </div>
            <button type="submit">💰 Hitung Total Biaya</button>
        </form>
    </div>
</body>
</html>