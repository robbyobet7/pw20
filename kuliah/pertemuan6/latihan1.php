<?php 
//array multidimensi
// array di dalam array
$mahasiswa = [
    ['Arima', '🐈', '🍕'],
    ['Robby', '🐇', '🍔'],
    ['Sukuna', '🐒', '🍦'],
    ['Dajai', '🐨', '🍜'],
    ['Kiyotaka', '🐔', '🍚']
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>

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
        <?php foreach($mahasiswa as $mhs) { ?>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>Makanan Fav: <?= $mhs[2]; ?></li>
            <li>Hewan Peliharaan: <?= $mhs[1]; ?></li>
        <?php } ?>
    </ol>
</body>

</html>