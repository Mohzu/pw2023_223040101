<?php 
//array Multidimensi
//array di dalam array
$mahasiswa = [
            ['Zuhdi', '🐉', '🍟'], 
            ['Dzikri', '🐈', '🍔'], 
            ['Marsa', '🐓', '🍜'], 
            ['Adira', '🐨', '🍚'], 
            ['Kaka', '🐈‍⬛', '🍞']
        ];


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
    <?php foreach($mahasiswa as $i ) { ?>
    <ul>
        <li>Nama : <?= $i[0]; ?></li>
        <li>Makanan Favorit : <?= $i[2]; ?></li>
        <li>Binatang Peliharaan <?= $i[1]; ?></li>
    </ul>
    <?php } ?>

    

    

</body>
</html>