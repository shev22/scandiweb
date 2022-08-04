<?php



require_once '../services/autoloader.php';


$router = new Router();

$router->get('/', [new Controller(), 'index']);
$router->get('/add-product', [new Controller(), 'create']);
$router->post('/add-product', [new Controller(), 'create']);
$router->post('/delete', [new Controller(), 'delete']);

$router->resolve();
