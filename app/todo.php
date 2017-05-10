<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    protected $table = "todolist";
    // Setting up accessor method ...
    public function getTodoAttribute($value){
        return ucfirst($value);
    }
    
    // setting up mutatotr method ...
    public function setTodoAttribute($value){
        $this->attributes["todo"] = ucfirst($value);
    }
}