<?php

namespace App\Http\Livewire\Admin;

use App\Models\Parents as ModelsParents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Parents extends Component
{
    use WithPagination;
    public $addParent = false;
    public $editParent = false;
    public $first_name, $last_name, $email, $trn;

    public function createParent(){
        $id = User::create([
            'first_name'=>$this->first_name,
            'last_name'=>$this->last_name,
            'email'=>$this->email,
            'password' => Hash::make("Password") 
        ])->id;

        ModelsParents::create([
            'user_id'=> $id,
            'trn'=>$this->trn
        ]);
        return redirect()->route('admin.parents');

    }

    public function modifyParent($id){
        $this->editParent = true;
        $parent = ModelsParents::find($id);
        $this->trn = $parent->trn;
        $user = User::find($parent->user_id);
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->parentId =$id;
    }

    public function parentUpdate(){
        ModelsParents::where('id', $this->parentId)->update([
            'trn'=> $this->trn,  
        ]);

        $userId = ModelsParents::where('id', $this->parentId)->get('user_id'); 

        User::where('id',$userId)->update([
            'first_name'=>$this->first_name,
            'last_name' => $this->last_name,
            'email' =>$this->email,
         ]);
    }

    public function deleteParent($id)
    {
        ModelsParents::where('id', $id)->delete();
    }

    public function render()
    {
        $parents = ModelsParents::paginate(7);
        return view('livewire.admin.parents', [
            'parents' => $parents,
        ]);
    }
}
