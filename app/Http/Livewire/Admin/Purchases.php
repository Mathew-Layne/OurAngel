<?php

namespace App\Http\Livewire\Admin;

use App\Models\Purchase;
use Livewire\Component;

class Purchases extends Component
{
    public function render()
    {
        $purchases = Purchase::all();
        return view('livewire.admin.purchases',
    ['purchases' =>$purchases]);
    }
}
