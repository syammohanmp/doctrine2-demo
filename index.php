<?php

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/entities"), $isDevMode);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'test',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
require 'entities/User.php';
require 'entities/Country.php';
require 'entities/CountryDetail.php';
//$user = new User();

$user = $entityManager->getRepository('User');
$users = $user->findAll();
 
 echo count($users). ' users <br />';

 $country = $entityManager->getRepository('Country');
 $countries = $country->findAll();
 echo count($countries ). ' countres <br />';
 
 $cd = $entityManager->getRepository('CountryDetail');
 $cds = $cd->findAll();
 //print_r($cds ); 
 