<div>
    <table class="min-w-full table-auto">
      <thead class="justify-between">
        <tr class="bg-gray-800">
          <th class="px-16 py-2">
            <span class="text-gray-300">Name</span>
          </th>
          <th class="px-16 py-2">
            <span class="text-gray-300">Value</span>
          </th>
          <th class="px-16 py-2">
            <span class="text-gray-300">Price</span>
          </th>
          <th class="px-16 py-2">
            <span class="text-gray-300">Actions</span>
          </th>
        </tr>
      </thead>
      <tbody class="bg-gray-200">
        {{-- @foreach ($vouchers as $voucher) --}}
        <tr class="bg-white border-4 border-gray-200">
          <td class="">
            <span class="text-center ml-2 font-semibold">1</span>
          </td>
          <td class="px-16 py-2">
            <span>1</span>
          </td>
          <td class="px-16 py-2">
            <span>1</span>
          </td>
          <td class="px-16 py-2">
            <button type="button" 
              class="border border-indigo-500 bg-black text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
              Edit
            </button>
            <button type="button" 
              class="border border-indigo-500 bg-black text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
              Delete
            </button>
          </td>
        </tr>
        {{-- @endforeach --}}
      </tbody>
    </table>
  </div>
