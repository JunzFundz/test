<?php

namespace Classes;

require_once "Connection.php"; // Correct path to Connection.php

use Exception;
use Classes\Connection;

class Users extends Connection {
    public function user_items() {
        try {
            $stmt = $this->getPdo()->prepare("SELECT * FROM items_data");
            $stmt->execute();

            $items = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $items;
        } catch (\PDOException $e) {
            throw new Exception("Failed to fetch items: " . $e->getMessage());
        }
    }
}
