<?php
namespace App\Core\Database;

use PDO;

class Connection {
    public static function make($config){
        try {
            return new PDO( $config['connection'] . ';dbname=' . $config['dbname'], $config['username'], $config['password'], $config['options']);
        } catch (Exception $e) {
            echo "Vasa konekcija nije bila uspesna. Greska: " . $e->getMessage();
            die;
        }
    }
}