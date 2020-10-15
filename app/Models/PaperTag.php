<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperTag extends Model
{
    use HasFactory;


    public $table = "paper_tag";
    public $timestamp = false;

    public function paper(){
        return $this->belongsTo("App\Paper");
    }

    public function tag(){
        return $this->belongsTo("App\Tag");
    }
}
