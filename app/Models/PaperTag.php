<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperTag extends Model
{
    use HasFactory;


    public $table = "paper_tag";
    protected $fillable = ['id','paper_id','tag_id'];

    public function paper(){
        return $this->belongsTo("App\models\Paper");
    }

    public function tag(){
        return $this->belongsTo("App\Models\Tag");
    }
}
