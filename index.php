<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once 'src/conf/pdo.php';

include 'src/aula001/consultaUser.php';
