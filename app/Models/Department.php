<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public $table="departments";
    public $timestamps = false;


    //to paper
    public function papers(){
        return $this->belongsToMany("App\Models\Paper");
    }

    //create paper
    public function department_paper(){
        return $this->hasMany("App\Models\paper_department");
    }
  
    //is inner
    public function innerDepartment(){
        return $this->hasOne("App\Models\Innerdepartment");
    }

    //is outter
    public function outterDepartment(){
        return $this->hasOne("App\Models\Outterdepartment");
    }
}
