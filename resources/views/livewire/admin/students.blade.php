<div>
    <div>

 <button type="button" wire:click="$set('addStudent', true)"
    class="bg-gray-900 text-white rounded-md px-4 py-2 mb-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
    Add Student
  </button>  

@if($addStudent)
  <section class="h-full absolute left-0 top-0 flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                           Student Information
                        </h6>
                        <i wire:click="$set('addStudent', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="createStudent()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                           Student Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            First Name
                                        </label>
                                        <input wire:model="first_name" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter First Name">
                                        @error('first_name')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Last Name
                                        </label>
                                        <input type="text" wire:model="last_name" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Last Name">
                                        @error('last_name')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Registration Number
                                        </label>
                                        <input wire:model="regis_no" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Registration Number">
                                        @error('regis_no')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Grade
                                        </label>
                                        <input  wire:model="grade" type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Grade">
                                        @error('grade')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>  
                                
                                <div class="w-full lg:w-full px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Parent
                                        </label>

                                        <select wire:model="parent_id" name="parent_id" id="parent_id" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Choose a parent</option>
                                            @foreach($parents as $parent)
                                            <option value="{{ $parent->id }}">{{ $parent->user->first_name }} {{ $parent->user->last_name }} - {{ $parent->trn }}</option>
                                            @endforeach
                                        </select>
                                        @error('parent_id')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div> 
                                <button class="px-10 bg-blue-600 ml-4 mt-3 py-3 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Add</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endif

<!--Edit Student---->
@if($editStudent)
  <section class="absolute left-0 top-0 flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                           Student Information
                        </h6>
                        <i wire:click="$set('editStudent', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="studentUpdate()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                           Student Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            First Name
                                        </label>
                                        <input wire:model="first_name" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter First Name">
                                        @error('first_name')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Last Name
                                        </label>
                                        <input type="text" wire:model="last_name" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Last Name">
                                        @error('last_name')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Registration Number
                                        </label>
                                        <input wire:model="regis_no" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Registration Number">
                                        @error('regis_no')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Grade
                                        </label>
                                        <input  wire:model="grade" type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Grade">
                                        @error('grade')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div>  
                                
                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Parent
                                        </label>

                                        <select wire:model="parent_id" name="parent_id" id="parent_id" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Choose a parent</option>
                                            @foreach($parents as $parent)
                                            <option value="{{ $parent->id }}">{{ $parent->user->first_name }} {{ $parent->user->last_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('parent_id')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror
                                    </div>
                                </div> 
                                <button class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endif

<!---End Edit Student---->


     <!--Table-->
  <div>
    <table class="min-w-full table-auto">
      <thead class="justify-between">
        <tr class="bg-gray-800">
          <th class="text-left py-4 px-6">
            <span class="text-gray-300">Student Name</span>
          </th>
          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Student ID No.</span>
          </th>

          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Parent Name</span>
          </th>

          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Grade</span>
          </th>

           <th class="text-left py-4 px-4">
            <span class="text-gray-300">Action</span>
          </th>

        </tr>
      </thead>
      <tbody class="bg-gray-200">
        @foreach ($students as $student)
        <tr class="bg-white border-4 border-gray-200">
          <td class="text-left py-4 px-4">
            <span class="text-center ml-2 font-semibold">{{ $student->first_name}} {{ $student->last_name}}</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>{{ $student->student_id }}</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>{{ $student->parent->user->first_name }} {{ $student->parent->user->last_name }}</span>
          </td>
           <td class="text-left py-4 px-4">
            <span>{{ $student->grade }}</span>
          </td>

          <td class="text-left py-4 px-4">
            <button type="button" wire:click="modifyStudent({{ $student->id }})"
              class="border border-indigo-500 bg-black text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
              Edit
            </button>
            <button type="button" wire:click="deleteStudent({{ $student->id }})"
              class="border border-indigo-500 bg-black text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
              Delete
            </button>
          </td>
        
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

</div>
