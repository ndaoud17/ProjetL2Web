<?php

namespace app\model;

class modelLigne_commande extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'ligne_commande';
    }

    public function saveLigne_commande($data){
        return $this->save($data);
    }

}