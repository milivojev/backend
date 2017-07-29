<?php
namespace App\Core\Database;

use PDO;

class QueryBuilder {

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($tablename) {
        // prepare a query
        $query = $this->pdo->prepare("SELECT * FROM {$tablename}");

        // execute a query
        $query->execute();

        // fetch data
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

//    public function getAllBookmarks(){
//        $query = $this->pdo->prepare("SELECT bookmarks.*, users.email as user FROM bookmarks
//LEFT JOIN users ON bookmarks.user_id = users.id ");
//        $query->execute();
//        return $query->fetchAll(PDO::FETCH_OBJ);
//    }

    public function getAllPosts(){
        $query = $this->pdo->prepare("SELECT posts.*, users.email as user, shooting_categories.title as category FROM posts 
LEFT JOIN users ON posts.user_id = users.id LEFT JOIN shooting_categories ON posts.category_id = shooting_categories.id");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllBookmark_Categories(){
        $query = $this->pdo->prepare("SELECT bookmark_categories.*,
  users.email as user_email
   FROM bookmark_categories  LEFT JOIN users ON bookmark_categories.user_id = users.id ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAllBookmarks(){
        $query = $this->pdo->prepare("SELECT bookmarks.*,
  users.email as user_email,
  bookmark_categories.title AS category 
   FROM bookmarks  LEFT JOIN users ON bookmarks.user_id = users.id  LEFT JOIN bookmark_categories ON bookmarks.bookmark_category_id = bookmark_categories.id");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAllCustomers(){
        $query = $this->pdo->prepare("SELECT customers.*,
  users.email as user
   FROM customers  LEFT JOIN users ON customers.user_id = users.id ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllShooting_Categories(){
        $query = $this->pdo->prepare("SELECT shooting_categories.*,
  users.email as user_email
   FROM shooting_categories  LEFT JOIN users ON shooting_categories.user_id = users.id ");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function getAllShootings(){
        $query = $this->pdo->prepare("SELECT shootings.*,
  users.email as user_email,
  customers.email as customer_email, customers.nick_name AS customer_nick ,
  shooting_categories.title AS category ,alarms.title AS alarm
   FROM shootings  LEFT JOIN users ON shootings.user_id = users.id LEFT JOIN customers ON shootings.customer_id = customers.id LEFT JOIN shooting_categories ON shootings.shooting_category_id = shooting_categories.id LEFT JOIN alarms ON shootings.alarm_id = alarms.id");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }



    public function insert($table, $parameters) {

        $sql = sprintf("INSERT INTO %s (%s) VALUES(%s)",
            $table,
            implode(", ", array_keys($parameters)),
            ":" . implode(", :", array_keys($parameters))) ;


        $query = $this->pdo->prepare($sql);

        $query->execute($parameters);

    }

    public function update($table, $parameters, $id) {

        $keys = "";
        foreach ($parameters as $key => $parameter) {
            $keys .= $key . ' = "' . $parameter .'",';
        }
        $keys= substr($keys, 0 , -1);

        $sql = sprintf("UPDATE %s SET %s WHERE id = '%s'",
            $table, $keys, $id);

        $query = $this->pdo->prepare($sql);

        $query->execute($parameters);

    }

    public function find($tablename, $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$tablename} WHERE id = '{$id}'");
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function delete($tablename, $id) {

        $query = $this->pdo->prepare("DELETE FROM {$tablename} WHERE id = '{$id}'");
        $query->execute();
    }

    public function authenticate($email, $password)
    {
        $query = $this->pdo->prepare("SELECT * FROM users WHERE email = '{$email}' AND password='{$password}'");
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

}

