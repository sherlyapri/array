<?php
$cars = array("Ferrari" , "lamborghini gallardo", "ford mustang");
$negara = ["Singapura", "Indonesia", "Jepang"];
$kota = array("Singaparnama","Indramayu","Jepara");

// echo "I like " . $cars[0] . "." .$cars[1] . "." .$cars[2].".";
// echo"<br>";
// var_dump($negara);
// echo"<br>";
// print_r($kota);

//menambahkan array

var_dump($kota);
$kota[]="Bogor";
echo"<br>";
var_dump($kota);
$kota[]="Jayapura";
echo"<br>";
var_dump($kota);


?>