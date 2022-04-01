<?php

namespace App\Http\Livewire\Admin;

use App\Models\Voucher as ModelsVoucher;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class Voucher extends Component
{
    public $voucherName, $value, $price;
    public $addVoucher = false;
    public $editVoucher = false;

    public function voucherAdd(){

        Http::withToken('2|bs5IWianEMtt1XIccheOh1CWGwfdyo7c7HDyVMJQ')->post('http://10.44.16.50:8080/api/voucher',[
            'name'=> $this->voucherName,
            'value' =>$this->value,
            'price' => $this->price  
        ]);



        // ModelsVoucher::create([
        // 'name'=> $this->voucherName,
        // 'value' =>$this->value,
        // 'price' => $this->price,
        // ]);

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

        Http::withToken('2|bs5IWianEMtt1XIccheOh1CWGwfdyo7c7HDyVMJQ')->put('http://10.44.16.50:8080/api/voucher/'. $this->voucherId, [
            'name' =>$this->voucherName,
            'price' =>$this->price,
            'value' => $this->value,
        ]);

        // ModelsVoucher::where('id', $this->voucherId)->update([
        //     'name' =>$this->voucherName,
        //     'price' =>$this->price,
        //     'value' => $this->value,
        // ]);
        return redirect()->route('admin.voucher');
    }

    public function voucherDelete($id){
        Http::withToken('2|bs5IWianEMtt1XIccheOh1CWGwfdyo7c7HDyVMJQ')->delete('http://10.44.16.50:8080/api/voucher/'. $id);
    }

    public function render()
    {
        $vouchers = Http::withToken('2|bs5IWianEMtt1XIccheOh1CWGwfdyo7c7HDyVMJQ')
        ->get('http://10.44.16.50:8080/api/voucher')
        ->object();
        

        return view('livewire.admin.voucher', [
            'vouchers' => $vouchers,
        ]);
    }
}
