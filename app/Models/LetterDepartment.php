<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterDepartment extends Model
{
    use HasFactory;

    public $table = "letter_department";
    public $timestamp = false;

    public function department(){
        return $this->belongsTo("App\Department");
    }

    public function letter(){
        return $this->belongsTo("App\Letter");
    }


}
