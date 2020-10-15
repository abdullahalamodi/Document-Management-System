<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperUser extends Model
{
    use HasFactory;

    public $table = "paper_user";
    public $timestamp = false;

    public function paper(){
        return $this->belongsTo("App\Paper");
    }

    public function user(){
        return $this->belongsTo("App\User");
    }
}
