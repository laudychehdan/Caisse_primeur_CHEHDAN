<?php

require_once('Produit.php');
require_once('ProduitUnite.php');
require_once('ProduitKilo.php');

$ananas=new ProduitUnite(1,3);
echo $ananas->CalculPrixUnite();

echo '</br>';

$abricot=new ProduitKilo(15, 2);
echo $abricot->CalculPrixKilo();
?>