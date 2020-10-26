<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Letter extends Model
{
    use HasFactory;

    public $table = "letters";

    //scope
    public function scopeCurrentUser($query)
    {
        return $query->where('author_id', Auth::user()->id);
    }

    //direct letter
    public function letter_department()
    {
        return $this->hasMany("App\Models\Letter_department");
    }

    //attachmnet
    public function paper_letter()
    {
        return $this->hasMany("App\Models\letter_paper");
    }



    //for many to many --atachments
    public function papers()
    {
        return $this->belongsToMany("App\Models\Paper");
    }

    //for one to one --inhertance
    public function paper()
    {
        return $this->belongsTo("App\Models\Paper");
    }


    public function department()
    {
        return $this->belongsToMany("App\Department");
    }
}
