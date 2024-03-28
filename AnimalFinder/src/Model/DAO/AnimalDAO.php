<?php

namespace APP\Model\DAO;

use APP\Model\Connection;
use APP\Model\Animal;
use PDO;

class AnimalDAO{
 public function insert( Animal $animal):bool
{
 $connection = Connection::getConnection();
 $stmt = $connection->prepare('INSERT INTO animal values(null,?,?,?,?,1)');
 $stmt->bindParam(1,$animal->name);
 $stmt->bindParam(2,$animal->color);
 $stmt->bindParam(3,$animal->height);
 $stmt->bindParam(4,$animal->address);
 return $stmt->execute();
}
public function findAll():array 
{
$connection = Connection::getConnection();
$stmt = $connection->query('select * from animal');
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
public function delete($id):bool
{
    $connection = Connection::getConnection();
$stmt = $connection->prepare('delete from animal where animal_code = ?');
$stmt->bindParam(1,$id);
return $stmt->execute();
}
}