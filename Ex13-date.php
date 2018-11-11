<?php
$jour=array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
for($i=2005;$i<=2010;$i++) {
    $jourA=$jour[date("w", mktime(00, 00, 00, 05, 01, $i))];
    echo "le premier Mai de l'année $i est: ".$jourA."<br/>";
    if($jourA=="Samedi"||$jourA=="Dimanche")
    {
        echo "Désolé"."<br/>";
    }
    elseif($jourA=="Vendredi"||$jourA=="Lundi")
    {
        echo"Week-end prolongé !"."<br/>";
    }
}