<div>
  <!-- component -->

  <button type="button" wire:click="$set('addVoucher', true)"
    class="bg-gray-900 text-white rounded-md px-4 py-2 mb-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
    Add Voucher
  </button>

  <!--create voucher form-->

  <!-- component -->
  @if($addVoucher)
  <div class="fixed z-10 inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
      <div class="flex items-center  h-8 w-8 rounded-full left-0">
        <button wire:click="$set('addVoucher', false)"><i class="fas fa-times"></i></button>
      </div>
      <h3 class="font-semibold text-md text-center text-blueGray-700">Add Voucher</h3>

      <form wire:submit.prevent="voucherAdd" class="flex flex-col bg-white  p-12">
        <label class="font-semibold text-xs" for="usernameField">Voucher Name</label>
        <input wire:model="voucherName"
          class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text">
        <label class="font-semibold text-xs" for="usernameField">Price</label>
        <input wire:model="price"
          class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text">

        <label class="font-semibold text-xs" for="usernameField">Value</label>
        <input wire:model="value"
          class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text">
        <button
          class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Add</button>
      </form>
      <!-- Component End  -->

    </div>
  </div>
  @endif

  <!---Edit Voucher Form-->

  <!-- component -->
  @if($editVoucher)
  <div class="fixed z-10 inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
    <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
      <div class="flex items-center  h-8 w-8 rounded-full left-0">
        <button wire:click="$set('editVoucher', false)"><i class="fas fa-times"></i></button>
      </div>
      <h3 class="font-semibold text-md text-center text-blueGray-700">Edit Voucher</h3>

      <form wire:submit.prevent="voucherUpdate()" class="flex flex-col bg-white  p-12">
        <label class="font-semibold text-xs" for="usernameField">Voucher Name</label>
        <input wire:model="voucherName"
          class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text">
        <label class="font-semibold text-xs" for="usernameField">Price</label>
        <input wire:model="price"
          class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text">

        <label class="font-semibold text-xs" for="usernameField">Value</label>
        <input wire:model="value"
          class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text">
        <button
          class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Update</button>
      </form>
    </div>
  </div>
  <!-- Component End  -->
  @endif

  <!--Table-->
  <div>
    <table class="min-w-full table-auto">
      <thead class="justify-between">
        <tr class="bg-gray-800">
          <th class="text-left py-4 px-6">
            <span class="text-gray-300">Name</span>
          </th>
          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Value</span>
          </th>
          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Price</span>
          </th>
          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Actions</span>
          </th>
        </tr>
      </thead>
      <tbody class="bg-gray-200">        
        @foreach ($vouchers as $voucher)
        <tr class="bg-white border-4 border-gray-200">
          <td class="text-left py-4 px-4">
            <span class="text-center ml-2 font-semibold">{{ $voucher->name }}</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>{{ $voucher->value }}</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>{{ $voucher->price }}</span>
          </td>
          <td class="text-left py-4 px-4">
            <button type="button" wire:click="voucherEdit({{ $voucher->id }})"
              class="border border-indigo-500 bg-black text-white rounded-md px-4 py-2 mx-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
              Edit
            </button>
            <button type="button" wire:click="voucherDelete({{ $voucher->id }})"
              class="border border-indigo-500 bg-black text-white rounded-md px-4 py-2 mx-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
              Delete
            </button>
          </td>
        </tr>

        
        @endforeach
      </tbody>
    </table>
  </div>
</div>