<?php

namespace app\model;

class modelArticle extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'articles';
    }

    public function findArticle($rules){
        return $this->find($rules);
    }

    public function findAllArticles(){
        return $this->find();
    }
}