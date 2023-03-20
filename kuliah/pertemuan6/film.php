<?php 
    $film = [
        [
        'poster' => 'Thor.png',
        'judul' => 'Thor Ragnarok',
        'tahun' => '2017',
        'genre' => 'Action',
        'pemeran utama' => [ 'Chris Hemswort,' , 'Tom Hiddleston,' , 'Cate Blanchett'] ,
        'sutradara' => 'Taika Waititi'
        ],

        [
        'poster' => 'Spiderman.png',
        'judul' => 'Spiderman No Way Home',
        'tahun' => '2021',
        'genre' => 'Action',
        'pemeran utama' => [ 'Tom Holland,' , 'Zendaya,' , 'Benedict Cumberbatch'] ,
        'sutradara' => 'Jon Watts'
        ],

        [
        'poster' => 'HawkEye.png',
        'judul' => 'Hawkeye',
        'tahun' => '2021',
        'genre' => 'Action',
        'pemeran utama' => [ 'Jeremy Renner,' , 'Hailee Steinfeld,' , 'Florence Pugh'] ,
        'sutradara' => 'Jonathan Igla'    
        ],

        [
        'poster' => 'Strange.png',
        'judul' => 'Doctor Strange in the Multiverse of Madness',
        'tahun' => '2022',
        'genre' => 'Action',
        'pemeran utama' => [ 'Benedict Cumberbatch,' , 'Elizabeth Olsen,' , 'Chiwetel Ejifor'] ,
        'sutradara' => 'Sam Raimi'
        ],

        [
        'poster' => 'Raid2.png',
        'judul' => 'The Raid 2',
        'tahun' => '2014',
        'genre' => 'Action',
        'pemeran utama' => [ 'Iko Uwais,' , 'Yayan Ruhian,' , 'Arifin Putra,'] ,
        'sutradara' => 'Gareth Evans'
        ]
        
        ]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film</title>
</head>
<body>
<h2>Daftar Film</h2>
<?php foreach($film as $i) { ?>
    <ul>
        <li><img src="img/<?= $i['poster']; ?>" width="120" height="200"></li>
        <li>Judul : <?= $i['judul']; ?></li>
        <li>Tahun : <?= $i['tahun']; ?></li>
        <li>Genre : <?= $i['genre']; ?></li>
        <li>Pemeran Utama : 
        <?php foreach ($i['pemeran utama'] as $p) {
            echo $p;
        };?></li>
        <li>Sutradara : <?= $i['sutradara']; ?></li>

    </ul>
    <?php } ?>
</body>
</html>