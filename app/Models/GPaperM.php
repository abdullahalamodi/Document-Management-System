<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GPaperM extends Model
{
    use HasFactory;
    protected $table = "g_papers_m";
    protected $fillable = ['id','category','paper_id'];
}
