<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnerDepartment extends Model
{
    use HasFactory;

    public $table="inner_departments";
    public $timestamps = false;


    //belong to dep
    public function department(){
      return $this->belongsTo("App\Models\Department");
  }

    //has user
    public function user(){
      return $this->hasOne("App\Models\User");
  }
}
