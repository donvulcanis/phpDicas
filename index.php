<?php

$msg = "";

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once 'src/conf/pdo.php';

include 'src/aula002/aula002insert.php';

include 'src/aula002/aula002form.html';

include 'src/aula001/consultaUser.php';

