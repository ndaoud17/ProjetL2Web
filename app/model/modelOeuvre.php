<?php

namespace app\model;

class modelOeuvre extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'oeuvres';
    }

    public function findAll()
    {
        return $this->find();
    }

    public function nbOeuvres() : int{
        return count($this->findAll());
    }

    public function updateOeuvre($data,$condition){
        return $this->update($data,$condition);
    }

    public function saveOeuvre($data){
        return $this->save($data);
    }

    public function findOeuvre($rules){
        return $this->find($rules);
    }

    public function deleteOeuvre($condition){
        return $this->delete($condition);
    }

}