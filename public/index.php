<?php

use Src\Router;

require_once __DIR__ . '/../vendor/autoload.php';

define('BASE_URL', 'http://localhost/projects/info/public');

// Configuração do erro reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configuração das rotas
require_once __DIR__ . '/../src/Router.php';
$router = new \Src\Router();

// Incluir as rotas
require_once __DIR__ . '/../routes/web.php';

// Despache da rota
$router->dispatch();
