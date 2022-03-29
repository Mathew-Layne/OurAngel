<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use  SoftDeletes;
    use HasFactory;
   
  
    protected $fillable = [
        'name',
        'value',
        'price',
        'voucher_id',
        'student_id',
    ];
    
    public function voucherHistory(){
        return $this->hasMany(VoucherHistory::class);
    }
}
