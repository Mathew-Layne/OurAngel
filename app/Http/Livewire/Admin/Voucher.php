<?php

namespace App\Http\Livewire\Admin;

use App\Models\Voucher as ModelsVoucher;
use Livewire\Component;


class Voucher extends Component
{
    public $voucherName, $value, $price;
    public $addVoucher = false;
    public $editVoucher = false;

    public function voucherAdd(){
        ModelsVoucher::create([
        'name'=> $this->voucherName,
        'value' =>$this->value,
        'price' => $this->price,
        ]);

        return redirect()->route('admin.voucher');
    }

    public function voucherEdit($id){
        $this->editVoucher = true;
        $vouchers = ModelsVoucher::find($id);
        $this->voucherName = $vouchers->name;
        $this->value = $vouchers->value;
        $this->price = $vouchers->price;
        $this->voucherId = $id;
    }

    public function voucherUpdate(){
        ModelsVoucher::where('id', $this->voucherId)->update([
            'name' =>$this->voucherName,
            'price' =>$this->price,
            'value' => $this->value,
        ]);
        return redirect()->route('admin.voucher');
    }

    public function voucherDelete($id){
        ModelsVoucher::where('id', $id)->delete();
    }

    public function render()
    {
        $vouchers = ModelsVoucher::all();
        return view('livewire.admin.voucher', [
            'vouchers' => $vouchers,
        ]);
    }
}
