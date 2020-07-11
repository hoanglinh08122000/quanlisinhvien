<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
   protected $table = 'discipline';
   protected $primaryKey = 'id'; 
   protected $fillable = ['name'];  
   public $timestamps = false; 
}
