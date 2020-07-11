<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   protected $table = 'subject';
   protected $primaryKey = 'id'; 
   protected $fillable = ['name','name','time','id_discipline','id_teacher'];  
   public $timestamps = false; 
}
