<?php

namespace App\Http\Livewire\Parents;

use App\Models\Purchase;
use App\Models\Student;
use App\Models\Voucher as ModelsVoucher;
use App\Models\VoucherHistory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Voucher extends Component
{
    public $makePurchase = false;
    public $purchaseId, $amount, $studentId, $voucherId;

    public function buyVoucher($id){
        $this->purchaseId = $id;
        $this->makePurchase = true;
    }

    public function purchaseNow($id){

        $purchase = new Purchase();
        $purchase->purchase_date = now();
        $purchase->quantity = 1;
        $purchase->parent_id = Auth::id();
        $purchase->student_id = $id;
        $purchase->amt_paid = $this->amount;
        $purchase->voucher_id = $this->voucherId;
        $purchase->save();

        $history = new VoucherHistory();
        $history->purchased_on = now();
        $history->voucher_id = $this->voucherId;
        $history->student_id = $this->studentId;
        $history->save();

        $this->makePurchase = false;
        
    }

    public function render()
    {
        $vouchers = ModelsVoucher::all();
        $voucherPay = ModelsVoucher::where("id", "=", $this->purchaseId)->first();
        $students = Student::where('parent_id', Auth::id())->get();

        return view('livewire.parents.voucher', [
            'vouchers' => $vouchers, 
            'voucherPay' => $voucherPay,
            'students' => $students,
        ]);
    }
}
