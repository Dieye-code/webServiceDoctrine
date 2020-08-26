<?php


require_once "bootstrap.php";


function getCompte($numero){

    $em = getEntiteManager();

    $compte = $em->createQuery("SELECT c FROM Compte c WHERE c.numero=:numero")->setParameter('numero',$numero)->getOneOrNullResult();

    return $compte;

}