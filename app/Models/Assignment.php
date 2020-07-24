<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use CoenJacobs\EloquentCompositePrimaryKeys\HasCompositePrimaryKey;

class Assignment extends Model
{
	use HasCompositePrimaryKey;
    protected $table = 'assignmen';
	protected $primaryKey = ['id_teacher','id_subject'];
	protected $fillable = ['id_teacher','id_subject','id_class'];
	public $incrementing = flase;
	public $timestamps = false;
	public function Teacher()
    {
    	return $this->belongsTo('App\Models\Teacher', 'id_teacher');
    }
    public function Subject()
    {
    	return $this->belongsTo('App\Models\Subject', 'id_subject');
    }
    public function Classs()
    {
    	return $this->belongsTo('App\Models\Classs', 'id_class');
    }
     public function Course()
    {
    	return $this->belongsTo('App\Models\Course', 'id');
    }
     public function Discipline()
    {
    	return $this->belongsTo('App\Models\Discipline', 'id');
    }
     
}
