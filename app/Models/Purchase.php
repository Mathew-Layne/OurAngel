<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
   
   
    protected $fillable = [
        'purchase_date',
        'voucher_no',
        'voucher_id',
        'parent_id',
    ];

    public function voucher(){
        return $this->belongsTo(Voucher::class);
    }

    public function parent(){
        return $this->belongsTo(Parents::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
