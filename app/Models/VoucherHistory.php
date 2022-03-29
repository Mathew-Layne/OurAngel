<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherHistory extends Model
{
    use HasFactory;

   
   
   
   
   
   
   
   
   
    
   
    protected $fillable = [
        'purchased_on',
        'amount',
        'balance',
        'voucher_id',
        'student_id',
    ];
}
