<div>

  @if($makePurchase)
    <section class="absolute h-full left-0 top-0 flex justify-center items-center z-10 bg-black bg-opacity-75 w-full py-1">
        <div class="w-full lg:w-6/12 px-4 mt-6">
            <div class="bg-white flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0 dark:border-gray-700 bg-gray-50  ">
                <div class="rounded-t bg-white mb-0 px-6 py-6 dark:border-gray-700  ">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Purchase Voucher
                        </h6>
                        <i wire:click="$set('makePurchase', false)" class="fas fa-times text-2xl cursor-pointer"></i>
                    </div>
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">


                    <form wire:submit.prevent="createMember()">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Member Details
                        </h6>

                        <div class="flex flex-wrap">

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-12/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Voucher Name
                                        </label>
                                        <select wire:model="voucherId" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value="">Select Voucher</option>
                                            {{-- @foreach ($voucherPay as $pay) --}}
                                            <option value="{{ $voucherPay->id }}">{{ $voucherPay->name }}</option>
                                            {{-- @endforeach --}}
                                        </select>
                                        {{-- @error('last_name')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror --}}
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Student Name
                                        </label>
                                        <select wire:model="studentId" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                          <option value="">Select Student</option>
                                          @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>                                            
                                          @endforeach
                                        </select>
                                        {{-- @error('email')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror --}}
                                    </div>
                                </div>

                                <div class="w-full lg:w-6/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            Amount
                                        </label>
                                        <input wire:model="amount" type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Amount to be Paid">
                                        {{-- @error('trn')<span class="text-xs text-red-600">{{
                                            $message }}</span>@enderror --}}
                                    </div>
                                </div> 
                                
                                <div class="w-full lg:w-12/12 px-4">
                                  <div class="relative w-full mb-3">
                                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Card Number
                                      </label>
                                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Card Number">
                                      
                                  </div>
                              </div>

                              <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          CVV
                                      </label>
                                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter CVV">
                                      
                                  </div>
                              </div>

                              <div class="w-full lg:w-6/12 px-4">
                                  <div class="relative w-full mb-3">
                                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Exp. Date
                                      </label>
                                      <input type="text" inputmode="numeric" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Enter Exp. Date">
                                     
                                  </div>
                              </div>
                              <button type="button" wire:click="purchaseNow({{ $student->id }})"
                                class="border border-indigo-500 bg-black text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                                Buy Now
                              </button>  
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    @endif

  <div>
    <table class="min-w-full table-auto">
      <thead class="justify-between">
        <tr class="bg-gray-800">
          <th class="py-2 px-6 text-left">
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
          <td class="py-2 px-4">
            <span class="ml-2 font-semibold">{{ $voucher->name }}</span>
          </td>
          <td class="py-2 px-4">
            <span>${{ $voucher->value }}</span>
          </td>
          <td class="py-2 px-4">
            <span>${{ $voucher->price }}</span>
          </td>
          <td class="py-2 px-4">
            <button type="button" wire:click="buyVoucher({{ $voucher->id }})"
              class="border border-indigo-500 bg-black text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
              Purchase
            </button>         
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</div>
