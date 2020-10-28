<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPaper extends Model
{
    use HasFactory;
    protected $table = "g_papers";
    protected $fillable = ['id','category','paper_id'];

    public function Categories(){
        return $this->hasMany("App\Models\GPaperCategory");
    }
}
