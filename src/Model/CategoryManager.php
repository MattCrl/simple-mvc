<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 27/09/18
 * Time: 10:24
 */

namespace Model;

require __DIR__ . '/../../app/db.php';

class CategoryManager
{
    public function selectAllCategories() :array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    public function selectOneCategory(int $id) :array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

}