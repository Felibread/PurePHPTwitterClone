<?php

namespace App;

class Connection
{

    public static function getDb()
    {
        try {

            $conn = new \PDO(
                "mysql:host=localhost;dbname=TwitterClone;charset=utf8",
                "root",
                ""
            );

            return $conn;
        } catch (\PDOException $e) {
            echo 'Erro ao tentar estabeler conexão. <br><hr>' . $e;
        }
    }
}
