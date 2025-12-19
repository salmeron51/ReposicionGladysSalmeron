<?php
require_once __DIR__ . "/../models/Evento.php";

class EventosController {

    public static function index() {
        $eventos = Evento::all();
        require __DIR__ . "/../views/layout/header.view.php";
        require __DIR__ . "/../views/eventos/index.view.php";
        require __DIR__ . "/../views/layout/footer.view.php";
    }

    public static function create() {
        $estados = ["Pendiente", "En curso", "Finalizado", "Cancelado"];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = self::validar($_POST, $estados);
            Evento::create($data);
            header("Location: ?controller=eventos&action=index");
            exit;
        }

        require __DIR__ . "/../views/layout/header.view.php";
        require __DIR__ . "/../views/eventos/create.view.php";
        require __DIR__ . "/../views/layout/footer.view.php";
    }

    public static function edit() {
        $id = (int)($_GET['id'] ?? 0);
        $evento = Evento::find($id);
        if (!$evento) { http_response_code(404); exit("Evento no existe"); }

       
        if ($evento['estado'] === 'Finalizado') {
            exit("No se puede modificar: evento Finalizado.");
        }

        $estados = ["Pendiente", "En curso", "Finalizado", "Cancelado"];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = self::validar($_POST, $estados);
            Evento::update($id, $data);
            header("Location: ?controller=eventos&action=index");
            exit;
        }

        require __DIR__ . "/../views/layout/header.view.php";
        require __DIR__ . "/../views/eventos/edit.view.php";
        require __DIR__ . "/../views/layout/footer.view.php";
    }

    public static function delete() {
        $id = (int)($_GET['id'] ?? 0);
        $evento = Evento::find($id);
        if (!$evento) { http_response_code(404); exit("Evento no existe"); }

       
        if ($evento['estado'] !== 'Cancelado') {
            exit("Solo se puede eliminar si el estado es Cancelado.");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Evento::delete($id);
            header("Location: ?controller=eventos&action=index");
            exit;
        }

        require __DIR__ . "/../views/layout/header.view.php";
        require __DIR__ . "/../views/eventos/delete.view.php";
        require __DIR__ . "/../views/layout/footer.view.php";
    }

    private static function validar(array $post, array $estados): array {
        $nombre = trim($post['nombre'] ?? '');
        $lugar  = trim($post['lugar'] ?? '');
        $fecha  = $post['fecha'] ?? '';
        $estado = $post['estado'] ?? '';

        if ($nombre === '' || $lugar === '' || $fecha === '') {
            exit("Campos obligatorios: nombre, lugar, fecha.");
        }
        if (!in_array($estado, $estados, true)) {
            exit("Estado inválido.");
        }

        return compact('nombre','lugar','fecha','estado');
    }
}
