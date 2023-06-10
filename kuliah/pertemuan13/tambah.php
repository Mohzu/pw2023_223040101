<?php
require('functions.php');

$title = 'Form Tambah Data';

// Insert Data ke tabel mahasiswa jika tombol di klik 
if(isset($_POST['tambah'])); {
   if(tambah($_POST) > 0) {
   echo"<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = 'index.php';
   </script>";
   }
}

require('views/tambah.view.php');
