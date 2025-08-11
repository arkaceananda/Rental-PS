<?php
require_once "classes/PS.php";
require_once "classes/Member.php";
require_once "classes/Rental.php";

$nama = $_POST['nama'];
$jenis_ps = $_POST['jenis_ps'];
$lama = (int)$_POST['lama'];
$member_tipe = $_POST['member'];

$hargaPS = [
    'PS2' => 5000,
    'PS3' => 7000,
    'PS4' => 10000,
    'PS5' => 15000
];

$psObj = new PS($jenis_ps, $hargaPS[$jenis_ps]);
$memberObj = new Member($member_tipe);
$rental = new Rental($nama, $psObj, $lama, $memberObj);
$hasil = $rental->hitungTotal();
?>
<!DOCTYPE html>
<html lang="id"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Struk Pembayaran</title> 
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/0/00/PlayStation_logo.svg" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>📄 Struk Pembayaran Sewa PlayStation</h1> 
        
        <p><strong>👤 Nama Penyewa:</strong> <span><?= htmlspecialchars($nama) ?></span></p>
        <p><strong>🎮 Jenis PlayStation:</strong> <span><?= htmlspecialchars($jenis_ps) ?></span></p>
        <p><strong>⏰ Durasi Sewa:</strong> <span><?= $lama ?> jam</span></p>
        <p><strong>💎 Membership:</strong> <span><?= htmlspecialchars($member_tipe) ?></span></p>
        
        <hr>
        
        <p><strong>💵 Harga Dasar:</strong> <span>Rp<?= number_format($hasil['hargaDasar'], 0, ',', '.') ?></span></p>
        <p><strong>🎁 Diskon:</strong> <span>- Rp<?= number_format($hasil['diskon'], 0, ',', '.') ?></span></p>
        <p><strong>💰 Cashback:</strong> <span>- Rp<?= number_format($hasil['cashback'], 0, ',', '.') ?></span></p>
        
        <p><strong>💳 Total Bayar:</strong> <span>Rp<?= number_format($hasil['totalBayar'], 0, ',', '.') ?></span></p>
        
        <a href="index.php">🔄 Sewa Lagi</a>
    </div>
</body>
</html>