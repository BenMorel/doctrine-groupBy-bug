<?php

require __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=doctrine_bug', 'root', '');

$config = new Doctrine\ORM\Configuration();

$driverImpl = $config->newDefaultAnnotationDriver(__DIR__ . '/model', false);
$config->setMetadataDriverImpl($driverImpl);

$config->setProxyDir(realpath(__DIR__ . '/proxy'));
$config->setProxyNamespace('DoctrineBug\Proxy');
$config->setAutoGenerateProxyClasses(true);

return Doctrine\ORM\EntityManager::create(['pdo' => $pdo], $config);
