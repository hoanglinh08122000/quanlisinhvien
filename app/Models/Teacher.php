<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Hash;

class Teacher extends Model
{
    protected $table = 'teacher'; // kết nối bảng lớp
    protected $primaryKey = 'id'; // đổi khóa chính thành id

    protected $fillable = ['name','date','level','address','email','phone','gender','password']; //khai báo cột cần 
    
    
    protected $attributes = [
        'level' => 2,
    ];
    public $timestamps = false; 
    public function setPasswordAttribute($password){

        $this->attributes['password'] = Hash::make($password);
    }
}
