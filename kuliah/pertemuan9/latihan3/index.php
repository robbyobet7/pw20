<?php
require('functions.php');
$name = 'Home';
$students = [
  [
    "nama" => "Sandhika Galih",
    "npm" => "043040023",
    "email" => "sandhikagalih@unpas.ac.id"
  ],
  [
    "nama" => "Doddy Ferdiansyah",
    "npm" => "133040003",
    "email" => "doddy@gmail.com"
  ]
];

// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');