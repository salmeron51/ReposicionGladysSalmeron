<?php
define('BASE_URL', '/mvc_eventos/public');

require_once __DIR__ . "/../app/controllers/EventosController.php";

$controller = $_GET['controller'] ?? 'eventos';
$action     = $_GET['action'] ?? 'index';

if ($controller === 'eventos') {
    if (!method_exists('EventosController', $action)) {
        http_response_code(404);
        exit("Acción no encontrada");
    }
    EventosController::$action();
} else {
    http_response_code(404);
    exit("Controlador no encontrado");
}
