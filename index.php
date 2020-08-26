<?php
header("content-type: application/json");

require_once "src/model/CompteDb.php";

$tab = [];

$url = explode('/', $_GET['url']);

if (isset($url[0]) && $url[0] == "Compte") {

    if (isset($url[1]) && $url[1] == "getSolde") {

        $methode = $_SERVER['REQUEST_METHOD'];
        if(isset($_GET['numero'])){
            $compte = getCompte($_GET['numero']);
            if($compte!=null){
                $tab [] = ['solde'=>$compte->getSolde()];
            } else{
                $tab[] = ['Ce Compte n\'existe pas dans la base de donnes'];
            }
            
        } else{
            $tab[] = ['Vous devez envoye le numero du Compte'];
        }
    } else {
        if(isset($_GET['numero'])){
            $compte = getCompte($_GET['numero']);
            if($compte!=null){
                foreach ($compte->getOperations() as $operation) {
                    $t = [];
                    $t ['type Operation'] = $operation->getTypeOperation()->getLibelle();
                    $t ['montant'] = $operation->getMontant();
                    $t ['Date Operation'] = $operation->getDateOperation();
                    $tab [] = $t;
                }
            } else{
                $tab[] = ['Ce Compte n\'existe pas dans la base de donnes'];
            }
            
        } else{
            $tab[] = ['Vous devez envoye le numero du Compte'];
        }
    }
}


echo json_encode($tab,JSON_PRETTY_PRINT);