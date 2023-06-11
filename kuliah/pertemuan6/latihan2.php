<?php 
//Array Associative
// array yang indexnya
$mahasiswa = [
    [
        'nama' => 'Arima', 
        'binatang' => '🐈',
        'makanan' => ['🍕', '🥐']
    ],
    [
        'nama' => 'Robby',
        'binatang' => '🐇', 
        'makanan' => ['🍔', '🧈', '🥓']
    ],
    [
        'nama' => 'Sukuna', 
        'binatang' => '🐒', 
        'makanan' => ['🍦', '🦪']
    ],
    [
        'nama' => 'Dajai', 
        'binatang' => '🐨',
        'makanan' => ['🍜']
    ],
    [
        'nama' => 'Kiyotaka', 
        'binatang' => '🐔',
        'makanan' => ['🍚', '🍤']
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>

</head>

<body>

    <h2>Daftar Mahasiswa</h2>
    <ul>
        <li>Name: Robby</li>
        <li>Favorite Food: 🍜</li>
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
            <li>Nama : <?= $mhs['nama']; ?></li>
            <li>Makanan Fav: 
                <?php foreach($mhs ['makanan'] as $food) {
                    echo $food;
                }?> 
            </li>
            <li>Hewan Peliharaan: <?= $mhs['binatang']; ?></li>
        <?php } ?>
    </ol>
</body>

</html>