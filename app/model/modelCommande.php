<?php

namespace app\model;

class modelCommande extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'commande';
    }

    public function saveCommande($data){
        return $this->save($data);
    }

    public function lastInsertId(): int
    {
        return parent::lastInsertId(); // TODO: Change the autogenerated stub
    }

}