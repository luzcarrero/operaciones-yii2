<?php

namespace app\models;
use yii\base\model;


class FormShearch
{
    public $busqueda;

    public function rules(){
        return [
          ["buscar","match","pattern"=>"/^[0-9a-záéíóúñ]+$/i","mensaje"=>"po ahí la estas cagando"],
        ];
    }


}