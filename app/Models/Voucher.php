<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    
    public function voucherHistory(){
        return $this->hasMany(VoucherHistory::class);
    }
}
