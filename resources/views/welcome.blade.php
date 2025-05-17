<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <form class="p-6 bg-white rounded-lg shadow-md space-y-4 max-w-screen-xl mx-auto">
  <h2 class="text-2xl font-bold mb-4">Input Data SPBU</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div>
      <label class="block font-medium mb-1">No. SPBU</label>
      <input type="text" name="no_spbu" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
</head>
<body>
    <form class="p-6 bg-white rounded-lg shadow-md space-y-4 max-w-screen-xl mx-auto">
  <h2 class="text-2xl font-bold mb-4">Input Data SPBU</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div>
      <label class="block font-medium mb-1">No. SPBU</label>
      <input type="text" name="no_spbu" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-blue-300">
    </div>

    <!-- Biosolar -->
    <div>
      <label class="block font-medium mb-1">Stok Akhir Biosolar</label>
      <input type="number" name="stok_biosolar" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Penjualan Biosolar</label>
      <input type="number" name="jual_biosolar" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Tera Biosolar</label>
      <input type="number" name="tera_biosolar" class="w-full border rounded px-3 py-2">
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Close menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <div class="-mx-3">
              <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                Product
                <!--
                  Expand/collapse icon, toggle classes based on menu open state.

                  Open: "rotate-180", Closed: ""
                -->
                <svg class="size-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>
              </button>
              <!-- 'Product' sub-menu, show/hide based on menu state. -->

            </div>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
          </div>
          <div class="py-6">
            <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>



    {{-- DROPDOWN --}}
    <div class="form-container m-30">
      <form>
      <div class="sm:col-span-3">
        <label for="country" class="block text-sm/6 font-medium text-gray-900">Country</label>
        <div class="mt-2 grid grid-cols-1">
          <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            <option>United States</option>
            <option>Canada</option>
            <option>Mexico</option>
          </select>
          <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </div>

        <label for="country" class="block text-sm/6 font-medium text-gray-900">Country</label>
        <div class="mt-2 grid grid-cols-1">
          <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            <option>United States</option>
            <option>Canada</option>
            <option>Mexico</option>
          </select>
          <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </div>
      </div>

    <!-- Pertamax Turbo -->
    <div>
      <label class="block font-medium mb-1">Stok Akhir Pertamax Turbo</label>
      <input type="number" name="stok_pturbo" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Penjualan Pertamax Turbo</label>
      <input type="number" name="jual_pturbo" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Tera Pertamax Turbo</label>
      <input type="number" name="tera_pturbo" class="w-full border rounded px-3 py-2">
    </div>

    <!-- Pertamax -->
    <div>
      <label class="block font-medium mb-1">Stok Akhir Pertamax</label>
      <input type="number" name="stok_pertamax" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Penjualan Pertamax</label>
      <input type="number" name="jual_pertamax" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Tera Pertamax</label>
      <input type="number" name="tera_pertamax" class="w-full border rounded px-3 py-2">
    </div>

    <!-- Pertamina Dex -->
    <div>
      <label class="block font-medium mb-1">Stok Akhir Pertamina Dex</label>
      <input type="number" name="stok_dex" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Penjualan Pertamina Dex</label>
      <input type="number" name="jual_dex" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Tera Pertamina Dex</label>
      <input type="number" name="tera_dex" class="w-full border rounded px-3 py-2">
    </div>

    <!-- Dexlite -->
    <div>
      <label class="block font-medium mb-1">Stok Akhir Dexlite</label>
      <input type="number" name="stok_dexlite" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Penjualan Dexlite</label>
      <input type="number" name="jual_dexlite" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Tera Dexlite</label>
      <input type="number" name="tera_dexlite" class="w-full border rounded px-3 py-2">
    </div>
  </div>

  <div class="pt-4">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
  </div>
</form>

</body>
</html>