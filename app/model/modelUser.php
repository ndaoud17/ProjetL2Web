<?php

namespace app\model;

class modelUser extends Model
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function nbUser($rules):int{
        return count($this->findUser($rules));
    }

    public function findUser($rules){
        return $this->find($rules);
    }

    public function saveUser($data){
        return $this->save($data);
    }



}