<?php
$prenom = "didier";
$nom = "CAPITAINE";
echo "je m'appelle $prenom $nom";

echo "<br>";

$pomme = 250;
$orange = 400;
$banane = 300;
$total = $pomme+$orange+$banane;

echo "j'ai dépensé $total
au marché ce matin";

echo "<br>";

define("pomme",300);

echo pomme;

echo "<br>";

echo "<br>";

 
  $taba = array("nom"=>"dany","age"=>30,"taille"=>170);
echo $taba["age"]; 

echo "<br>";

$didier = 30;
$capitaine = 20;

if($didier!=$capitaine){
 echo"didier n'est pas capitaine";
}elseif($didier>$capitaine){
echo"didier est plus grand que capitaine";}else {
	echo "didier et capitaine sont les même";}











?>
