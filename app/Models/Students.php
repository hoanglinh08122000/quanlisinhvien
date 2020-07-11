<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Hash;

class Students extends Model
{
    protected $table = 'students'; // kết nối bảng lớp
    protected $primaryKey = 'id'; // đổi khóa chính thành id

    protected $fillable = ['name','date','level','address','phone','email','gender','password']; //khai báo cột cần 

   
    protected $attributes = [
        'level' => 3,
    ];
    public $timestamps = false; // chỉnh time chắc phải bắt buộc
    public function setPasswordAttribute($password){

        $this->attributes['password'] = Hash::make($password);
    }
}
