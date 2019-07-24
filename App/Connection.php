<?php

namespace App;

class Connection
{

    public static function getDb()
    {
        try {

            $conn = new \PDO(
                "mysql:host=localhost;dbname=twitter_clone;charset=utf8",
                "felibread",
                "fjm27012000"
            );

            return $conn;
        } catch (\PDOException $e) {
            echo 'Erro ao tentar estabeler conexão. <br><hr>' . $e;
        }
    }
}
