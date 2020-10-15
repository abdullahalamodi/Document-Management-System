<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $table="tags";

    public function papers(){
        return $this->belongsToMany("App\Paper");
    }
}
