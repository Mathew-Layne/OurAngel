<?php

namespace App\Http\Livewire\Parents;

use App\Models\Voucher as ModelsVoucher;
use Livewire\Component;

class Voucher extends Component
{
    public function buyVoucher($id){
        
    }

    public function render()
    {
        $vouchers = ModelsVoucher::all();

        return view('livewire.parents.voucher', ['vouchers' => $vouchers]);
    }
}
