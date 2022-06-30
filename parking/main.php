<?php
include "Vehicule.php";
include "Camion.php"; //I want autoloading
include "Voiture.php"; // I want composer ....
include "Parking.php";

    //créé un parking;
    $parking = new Parking(40);
    $voiture1 = new Voiture("peugeot 207", "XXX207",1,4);
    $voiture2 = new Voiture("peugeot 305", "XXX305",1,4);
    $voiture3 = new Voiture("renault kangoo", "XXXkangoo",1,4);
    $voiture4 = new Voiture("toyota yarris ", "XXXyarriv",1,4);
    $voiture5 = new Voiture("peugeot 207", "XXX207b",1,4);
    $camion1 = new Camion('reneault truck 1T5', "XXX1T5", 3,6);
    $pikachu = new Pokemon("pikacu");
    $parking->addVoiture($pokemon);
    $parking->addVoiture($voiture1);
    $parking->addVoiture($camion1);
    $parking->addVoiture($voiture2);
    $parking->addVoiture($voiture3);
    $parking->addVoiture($voiture4);
    $parking->addVoiture($voiture5);