<?php

namespace App\Http\Livewire\Parents;

use App\Models\Voucher as ModelsVoucher;
use Livewire\Component;

class Voucher extends Component
{
    public $makePurchase = false;
    public $purchaseId;

    public function buyVoucher($id){
        $this->purchaseId = $id;
        $this->makePurchase = true;


    }

    public function render()
    {
        $vouchers = ModelsVoucher::all();
        $voucherPay = ModelsVoucher::where("id", "=", $this->purchaseId)->get();

        return view('livewire.parents.voucher', ['vouchers' => $vouchers, 'voucherPay' => $voucherPay]);
    }
}
