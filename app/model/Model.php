<?php

namespace app\model;

use app\config\Database;
use PDO;

class Model
{
    private \PDO $conn;
    protected String $table;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function find($rules=array())
    {
        $fetch = 'fetchAll';
        $conditions="1";
        $fields="*";
        $limit="";
        $order=$this->table.".id ASC";
        $othertable="";
        if(isset($rules["conditions"])){$conditions=$rules["conditions"];}
        if(isset($rules["fields"])){$fields=$rules["fields"];}
        if(isset($rules["limit"])){$limit="LIMIT".$rules["limit"];}
        if(isset($rules["order"])){$order=$rules["order"];}
        if(isset($rules["othertable"])){$othertable=','.$rules["othertable"];}
        if(isset($rules["fetch"])){$fetch=$rules["fetch"];}

        $sql="SELECT $fields FROM ". $this->table." ".$othertable." WHERE $conditions ORDER BY $order $limit";

        $prepa=$this->conn->prepare($sql);
        $prepa->execute();

        $data=$prepa->$fetch(PDO::FETCH_OBJ);

        return $data;

    }


    public function save($data=array()){

        $sql="INSERT INTO ".$this->table."(";
        foreach ($data as $key => $value) {
            $sql.="$key,";
        }
        //suppression de la virgule
        $sql=substr($sql,0,-1);
        $sql.=" ) VALUES (";
        foreach ($data as $key => $value) {
            $sql.="'$value',";
        }
        $sql=substr($sql,0,-1);
        $sql.=" )";
        $retour=$this->conn->prepare($sql);
        $retour->execute();
        return $retour;
    }

    public function update($data=array(),$condition){
        $sql="UPDATE ".$this->table." SET";
        foreach ($data as $key => $value) {
            $sql.="`$key`='$value',";
        }
        //suppression de la virgule
        $sql=substr($sql,0,-1);
        $sql=$sql.$condition;
        $retour=$this->conn->prepare($sql);
        $retour->execute();
        return $retour;
    }

    public function delete($condition){
        $sql="DELETE FROM ".$this->table. $condition;
        $retour=$this->conn->prepare($sql);
        $retour->execute();
        return $retour;
    }

    public function lastInsertId():int{
        return $this->conn->lastInsertId();
    }
}