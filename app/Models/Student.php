<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function parent(){
        return $this->belongsTo(Parent::class);
    }

    public function voucherHistory(){
        return $this->hasMany(VoucherHistory::class);
    }
}
