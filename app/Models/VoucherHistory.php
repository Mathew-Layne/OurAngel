<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoucherHistory extends Model
{
    use HasFactory;

    public function voucher(){
        return $this->belongsTo(Voucher::class);
    }
    
     public function student(){
         return $this->belongsTo(Student::class);
    }
}
