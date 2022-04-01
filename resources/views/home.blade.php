<x-header>

    <div class="w-full h-screen bg-[url('/img/foodbg2.jpg')] bg-no-repeat bg-cover bg-center">
        <nav class="h-[10%] drop-shadow-lg flex justify-between py-6 px-5 w-full bg-gradient-to-r from-gray-900 via-blue-900  to-gray-900 text-white">
            <h1 class="text-xl">Our Angel Primary</h1>
            <ul class="flex gap-5">
                <li><a href="{{ route('login') }}">Login</a> </li>
                <li><a href="{{ route('register') }}">Register</a></li>
            </ul>
        </nav>
        <header class="h-[90%] w-full bg-black bg-opacity-80 flex justify-center items-center">
            <div class="text-center">
                <h1 class="text-5xl font-bold mb-5 text-white">E-Voucher Management System</h1>
                <h3 class="text-xl font-bold mb-5 text-white">Easy And Affordable way of Paying for school Meals</h3>
                <button class="bg-indigo-900 text-white py-2 px-3 rounded-lg mx-2 font-semibold hover:bg-indigo-700">Learn More</button>
                <button class="bg-white text-indigo-900 py-2 px-6 rounded-lg mx-2 font-semibold hover:bg-gray-300">Explore</button>
            </div>            
        </header>
    </div>

</x-header>