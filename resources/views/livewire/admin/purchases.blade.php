<div>

  <!--Table-->
  <div>
    <table class="min-w-full table-auto">
      <thead class="justify-between">
        <tr class="bg-gray-800">
          <th class="text-left py-4 px-6">
            <span class="text-gray-300">Date</span>
          </th>
          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Parent Name</span>
          </th>
          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Voucher Number</span>
          </th>

          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Price</span>
          </th>

        </tr>
      </thead>
      <tbody class="bg-gray-200">
        @foreach ($purchases as $purchase)
        <tr class="bg-white border-4 border-gray-200">
          <td class="text-left py-4 px-4">
            <span class="text-center ml-2 font-semibold">{{ $purchase->purchase_date }}</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>{{ $purchase->parent->user->first_name  }} {{ $purchase->parent->user->last_name }}</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>{{ $purchase->voucher_no }}</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>{{ $purchase->voucher->price }}</span>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>