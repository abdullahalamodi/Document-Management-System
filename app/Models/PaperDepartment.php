<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperDepartment extends Model
{
    use HasFactory;

    public $table ="paper_department";

    protected $fillable = ['id','paper_id','department_id','type'];
 
    public function department(){
        return $this->belongsTo("App\Models\Department");
    }
 
    public function paper(){
     return $this->belongsTo("App\Models\Paper");
 }
}
