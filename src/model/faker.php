<?php

use Faker\Factory;
use Faker\ORM\Doctrine\Populator;

require_once 'bootstrap.php';
require_once "vendor/autoload.php";


$em = $entityManager;

$faker = Factory::create();



// for ($i=0; $i < 10; $i++) { 

//     $client = new Client();

//     $client->setPrenom($faker->firstNameMale);
//     $client->setNom($faker->lastName);
//     $client->setAdresse($faker->address);
//     $client->setEmail($faker->email);
//     $client->setTelephone($faker->e164PhoneNumber);
//     // var_dump($client->getPrenom());
//     // echo("<br>");
//     $em->persist($client);
//     $em->flush();
// }
// for ($i=0; $i < 100; $i++) { 

// var_dump(str_shuffle(date('YmdHim')) );
// echo "<br/>";
// }
// die;

// for ($i = 0; $i < 50; $i++) {

//     $compte = new Compte();

//     $compte->setNumero('N001' . str_shuffle(date('YmdHim')));
//     $compte->setSolde((int)$faker->numberBetween(150000, 1500000));
//     $compte->setClient($em->getRepository('Client')->find((int)$faker->numberBetween(1, 10)));

//     $em->persist($compte);
//     $em->flush();
// }

// for ($i = 0; $i < 400; $i++) {

//     $operation = new Operation();

//     $operation->setMontant($faker->numberBetween(1000, 20000));
//     $operation->setDateOperation($faker->date());

//     $operation->setTypeOperation($em->getRepository("TypeOperation")->find($faker->numberBetween(1, 2)));
//     $operation->setCompte($em->getRepository("Compte")->find($faker->numberBetween(1, 50)));



//     $em->persist($operation);
//     $em->flush();
// }

// $opNull = $em->createQuery("SELECT o FROM Operation o WHERE o.compte IS NULL")->getResult();

// foreach ($opNull as $operation) {
//     $operation->setCompte($em->getRepository('Compte')->find(random_int(50,81)));
//     $em->merge($operation);
//     $em->flush();
// }



?>

<!-- numberBetween($min = 1000, $max = 9000) -->