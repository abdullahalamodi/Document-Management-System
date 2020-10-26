<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutterDepartment extends Model
{
    use HasFactory;


    public $table="outter_departments";

    //belong to dep
    public function department(){
      return $this->belongsTo("App\Department");
  }
}
