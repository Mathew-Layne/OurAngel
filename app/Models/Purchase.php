<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function voucher(){
        return $this->belongsTo(Voucher::class);
    }

    public function parent(){
        return $this->belongsTo(Parent::class);
    }
}
