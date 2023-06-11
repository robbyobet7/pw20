<?php 
$binatang = ['🐈','🐇','🐒','🐨','🐔'];
$makanan = ['🍕','🍔','🍦','🍜','🍚'];
$mahasiswa = ['Bayu','Robby','Dappa','Raffy','Bima'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>

</head>

<body>

    <h2>Daftar Mahasiswa</h2>
    <ul>
        <li>Nama: Robby</li>
        <li>Makanan Favorit: 🍜</li>
        <li>Binatang Peliharaan: 🐈</li>
    </ul>
    <ul>
        <li>Nama: Ahmad</li>
        <li>Makanan Favorit: 🍚</li>
        <li>Binatang Peliharaan: 🦍</li>
    </ul>
<hr>
    <h2>Daftar Mahasiswa</h2>
    <ol>
        <?php foreach($mahasiswa as $i => $m) { ?>
            <li>Nama : <?= $mahasiswa[$i]; ?></li>
            <li>Makanan Fav: <?= $makanan[$i]; ?></li>
            <li>Hewan Peliharaan: <?= $binatang[$i]; ?></li>
        <?php } ?>
    </ol>
</body>

</html>