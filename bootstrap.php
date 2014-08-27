<?php

date_default_timezone_set('America/Sao_Paulo');

$separator = DIRECTORY_SEPARATOR;
require_once 'vendor'.$separator.'autoload.php';

#definir arquivo de conexão com bd
#ao necessitar de persistência e utilizar EntityManager do DOctrine