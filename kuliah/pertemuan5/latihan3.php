<?php 
    $binatang = ['🐈', '🐒' , '🐇', '🦆', '🐔'];
    $makanan = ['🍜', '🍔', '🍕', '🍚', '🍟'];
    $mahasiswa = ['Zuhdi', 'Dzikri', 'Marsa', 'Adira', 'Kaka'];
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
    <?php foreach($makanan as $i => $m) { ?>
    <ul>
        <li>Nama : <?= $mahasiswa[$i]; ?></li>
        <li>Makanan Favorit : <?= $makanan[$i]; ?></li>
        <li>Binatang Peliharaan <?= $binatang[$i]; ?></li>
    </ul>
    <?php } ?>

    

    

</body>
</html>