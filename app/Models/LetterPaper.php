<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterPaper extends Model
{
    use HasFactory;

    public $table = "paper_letter";
    public $timestamp = false;

    public function paper(){
        return $this->belongsTo("App\Paper");
    }

    public function letter(){
        return $this->belongsTo("App\Letter");
    }
}
