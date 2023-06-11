<?php 
    $film = [
        [
            'poster' => 'Titanic.jpeg', 
            'judul' => 'Titanic',
            'tahun' => '1997',
            'genre' => ['Drama, ', 'Romance'],
            'pemeran utama' => ['Leonardo Dicaprio, ', 'Kate Winslet'],
            'sutradara' => 'James Cameron' 
        ],
        [
            'poster' => 'TrainToBusan.jpeg', 
            'judul' => 'Train to Busan',
            'tahun' => '2016',
            'genre' => ['Action, ','Horror, ','Thriller'],
            'pemeran utama' => ['Gong Yoo, ','Jung Yu-mi, ', 'Ma Dong-Seok'],
            'sutradara' => 'Sang-ho Yeon'
        ],
        [
            'poster' => 'Munafik.jpeg', 
            'judul' => 'Munafik',
            'tahun' => '2016',
            'genre' => ['Horror, ', 'Mystery, ', 'Thriller'],
            'pemeran utama' => ['Syamsul Yusof, ', 'Nabila Huda, ', 'Sabrina Ali'],
            'sutradara' => 'Syamsul Yusof'
        ],
        [
            'poster' => 'YourLieInApril.jpeg', 
            'judul' => 'Your Lie In April',
            'tahun' => '2014-2018',
            'genre' => ['Drama, ', 'Romance, ', 'Animation, ', 'Comedy'],
            'pemeran utama' => ['Natsuki Hanae, ','Risa Taneda, ', 'Ayane Sakura'],
            'sutradara' => 'Naoshi Arakawa'
        ],
        [
            'poster' => 'OnePunchMan.jpeg', 
            'judul' => 'One Punch Man',
            'tahun' => '2015-2019',
            'genre' => ['Animation, ','Comedy, ','Action'],
            'pemeran utama' => ['Makoto Furukawa, ', 'Kaito Ishikawa, ', 'Max Mittlleman'],
            'sutradara' => 'One'
        ]
    ];
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
    <h2>Daftar Film Favorit</h2>
    <?php foreach($film as $f) { ?>
    <img src="img/<?= $f['poster']; ?>">
        <ol>
            <li> Judul: <?= $f ['judul']; ?></li>
            <li> Tahun: <?= $f ['tahun']; ?></li> 
            <li> Genre: <?php foreach($f ['genre'] as $g) {
                echo $g;
            }?></li>
            <li>Pemeran utama: <?php foreach($f ['pemeran utama'] as $p) {
            echo $p;
            }?></li>
            <li>Sutradara: <?= $f ['sutradara']; ?></li>
            <hr>
            <?php } ?>
        </ol>    
</body>
</html>