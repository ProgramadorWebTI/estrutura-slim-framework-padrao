<?php

namespace Galeguinho\Models;

use Galeguinho\Database;

class Salve extends Database
{
    public function teste()
    {
        $stmt = $this->db->prepare("SELECT * FROM users");
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }
} 