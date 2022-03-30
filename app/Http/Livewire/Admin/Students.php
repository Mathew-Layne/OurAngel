<?php

namespace App\Http\Livewire\Admin;

use App\Models\Parents;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;
use PHPUnit\Framework\MockObject\Builder\Stub;

class Students extends Component
{
    Use WithPagination;
    public $addStudent = false;
    public $editStudent = false;
    public $first_name, $last_name, $regis_no, $grade, $parent_id;

    public function createStudent(){
        Student::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'student_id' =>$this->regis_no,
            'grade' => $this->grade, 
            'parent_id' => $this->parent_id,
             ]);
             return redirect()->route('admin.students');
    }

    public function modifyStudent($id){
        $this->editStudent =  true;
        $singleStudent = Student::find($id);
        $this->first_name = $singleStudent->first_name;
        $this->last_name = $singleStudent->last_name;
        $this->regis_no = $singleStudent->student_id;
        $this->grade = $singleStudent->grade;
        $this->parent_id = $singleStudent->parent_id;
        $this->studentId = $id;
    }

    public function studentUpdate(){
        Student::where('id', $this->studentId)->update(['first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'student_id' => $this->regis_no,
            'grade' => $this->grade,
            'parent_id' => $this->parent_id,
    ]);
        return redirect()->route('admin.students');
    }

    public function deleteStudent($id){
        Student::where('id', $id)->delete();
    }

    public function render()
    {
        $parents = Parents::all();
        $students = Student::paginate(5);
        return view('livewire.admin.students',[
            'students'=> $students,
            'parents'=>$parents,
        ]);
    }
}
