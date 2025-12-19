<?php
require_once __DIR__ . "/../config/db.php";

class Evento {
    public static function all(): array {
        $stmt = db()->query("SELECT * FROM eventos ORDER BY fecha DESC, evento_id DESC");
        return $stmt->fetchAll();
    }

    public static function find(int $id): ?array {
        $stmt = db()->prepare("SELECT * FROM eventos WHERE evento_id = ?");
        $stmt->execute([$id]);
        $row = $stmt->fetch();
        return $row ?: null;
    }

    public static function create(array $data): void {
        $sql = "INSERT INTO eventos (nombre, lugar, fecha, estado) VALUES (?, ?, ?, ?)";
        $stmt = db()->prepare($sql);
        $stmt->execute([$data['nombre'], $data['lugar'], $data['fecha'], $data['estado']]);
    }

    public static function update(int $id, array $data): void {
        $sql = "UPDATE eventos SET nombre=?, lugar=?, fecha=?, estado=? WHERE evento_id=?";
        $stmt = db()->prepare($sql);
        $stmt->execute([$data['nombre'], $data['lugar'], $data['fecha'], $data['estado'], $id]);
    }

    public static function delete(int $id): void {
        $stmt = db()->prepare("DELETE FROM eventos WHERE evento_id=?");
        $stmt->execute([$id]);
    }
}
