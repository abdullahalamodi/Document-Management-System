<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class GPaperCategory extends Model
{
    
    protected $table = "g_paper_categories";
    protected $fillable = ['id','name','g_paper_id'];

    public function gPaper(){
        return $this->belongsTo("App\models\GPaper");
    }
    
    
}
