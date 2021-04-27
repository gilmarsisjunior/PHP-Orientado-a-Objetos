<?php 
require('GettersEsetters.php');

$p1 = new ContaBanco();
$p2 = new ContaBanco();

$p1 -> abrirConta('CC');
$p1 -> setNumConta(111);
$p1 -> setDono('Gilmar');
$p1 -> sacar(50);


$p2 -> abrirConta('CP');
$p2 -> setNumConta(3211);
$p2 -> setDono('Pedro');




echo '<pre>';
print_r($p1);
echo '<pre/> <br/>';

echo '<pre>';
print_r($p2);
echo '<pre/>';