<?php

namespace App\Http\Livewire\Parents;

use App\Models\Purchase;
use App\Models\VoucherHistory;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Purchases extends Component
{
    public function render()
    {  
        $purchases = Purchase::where('parent_id', Auth::id())->get();

        return view('livewire.parents.purchases', [
            'purchases' => $purchases
        ]);
    }
}
