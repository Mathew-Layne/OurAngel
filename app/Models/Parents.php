<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_no', 
        'user_id',
        'trn'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function purchase(){
        return $this->hasMany(Purchase::class);
    }
}
