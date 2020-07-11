<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
   protected $table = 'course';
   protected $primaryKey = 'id'; 
   protected $fillable = ['name'];  
   public $timestamps = false; 
}
