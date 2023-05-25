<?php 
require('functions.php');
  $title = 'Home';
  $students = [
    [
      "nama" => "Moch Zuhdi",
      "npm" => "223040101",
      "email" => "mochzuhdi04@gmail.com"
    ],
    [
      "nama" => "Kaka Praditha",
      "npm" => "223040087",
      "email" => "kakapradithaa123@gmail.com"
    ],
  ]; 

  // dd($_SERVER["REQUEST_URI"]);
  // "/pw2023_223040101/kuliah/pertemuan9/

  require('views/index.view.php');
  

