<?php 
$mahasiswa = [
    ['nama' => 'Moch Zuhdi Maulana Nabilah',
    'npm' => '223040101',
    'email' => 'Zuhdi.223040101@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'zuhdi1.jpg'
    ],

    ['nama' => 'Dzikri Setiawan',
    'npm' => '223040072',
    'email' => 'Dzikri.223040072@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'dzikri.jpg'
    ],

    ['nama' => 'Muhammad Marsa Nurjaman',
    'npm' => '223040083',
    'email' => 'Marsa.223040083@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'marsa.jpg'
    ],

    ['nama' => 'Kaka Praditha Putra',
    'npm' => '223040087',
    'email' => 'Kaka.223040087@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'kaka.jpg'
    ],

    ['nama' => 'Muhammad Daffa Riyadi',
    'npm' => '223040120',
    'email' => 'Daffa.223040120@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'daffarb.jpg'
    ],

    ['nama' => 'Rivaldy Novyan Dwi Putra',
    'npm' => '223040110',
    'email' => 'Rivaldy.223040110@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'rivaldy.jpg'
    ],

    ['nama' => 'Muhammad Alfath Septian',
    'npm' => '223040014',
    'email' => 'Alfath.223040014@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'afat.jpg'
    ],

    ['nama' => 'Rizal Fahla',
    'npm' => '223040125',
    'email' => 'Rizal.223040125@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'rizal.jpg'
    ],

    ['nama' => 'Arley Praja Gunawan',
    'npm' => '223040106',
    'email' => 'Arley.223040106@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'arley.jpg'
    ],

    ['nama' => 'Muhammad Daffa Mussyaffa',
    'npm' => '223040048',
    'email' => 'Daffa.223040048@mail.unpas.ac.id',
    'jurusan' => 'Teknik Informatika',
    'foto' => 'dafsus.jpg'
    ]
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 5a</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
      <li>
      <img src="img/<?= $mhs['foto']; ?>" width="150" height="150">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NRP : <?= $mhs["npm"]; ?></li>
      <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>