<?php
   require 'Voiture.php';

   $v1 = new Voiture("Peugeot","408",5);
   $v2 = new Voiture("Citroën","C4",3);
 
   echo $v1->freiner(20);
   echo $v1->demarrer();
   echo $v1->getVitesse() ."<br>";
   echo $v1->freiner(20);
   echo $v1->accelerer(21);
   echo $v1->freiner(20);
   echo $v1;


?>