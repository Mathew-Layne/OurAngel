<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'first_name',
        'last_name',
        'grade',
        'parent_id',
        'student_id'
    ];
    
    public function parent(){
        return $this->belongsTo(Parent::class);
    }

    public function voucherHistory(){
        return $this->hasMany(VoucherHistory::class);
    }

    public function purchase(){
        return $this->hasMany(Purchases::class);
    }
}
