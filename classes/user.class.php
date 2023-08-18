<?php
require_once "../classes/dbh.class.php";
class User extends Dbh
{
    public function all()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        while ($result = $stmt->fetchAll()) {
            return $result;
        }
    }
}
