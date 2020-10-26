<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;


    public $table="papers";
    protected $fillable = ['id','title','discription',
            'image','date','note'];

    
    //create paper
    public function department_paper(){
        return $this->hasMany("App\Models\paperDepartment");
    }

    //tages
    public function paper_tag(){
        return $this->hasMany("App\Models\PaperTag");
    }

    //attachmnet
    public function paper_letter(){
        return $this->hasMany("App\Paper_letter");
    }

    //privilees
    public function paper_user(){
        return $this->hasMany("App\Paper_user");
    }

    public function tags(){
        return $this->belongsToMany("App\Models\Tag");
    }

    
    public function department(){
        return $this->hasMany("App\Models\Department");
    }

    
    public function letter(){
        return $this->belongsToMany("App\Letter");
    }

    public function user(){
        return $this->belongsToMany("App\User");
    }
}
