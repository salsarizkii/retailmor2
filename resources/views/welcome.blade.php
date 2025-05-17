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
    <div>
      <label class="block font-medium mb-1">Penjualan Biosolar</label>
      <input type="number" name="jual_biosolar" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Tera Biosolar</label>
      <input type="number" name="tera_biosolar" class="w-full border rounded px-3 py-2">
    <div>
      <label class="block font-medium mb-1">Tera Biosolar</label>
      <input type="number" name="tera_biosolar" class="w-full border rounded px-3 py-2">
    </div>
  </nav>
  
</header>

    {{-- DROPDOWN --}}
    <div class="form-container m-30">
      <div class="my-5">
        <h2 class="text-base/7 font-semibold text-gray-900">Personal Information</h2>
        <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>
      </div>
      <form>
      <div class="sm:col-span-3">
        <label for="country" class="block text-sm/6 font-medium text-gray-900">Provinsi</label>
        <div class="mt-2 grid grid-cols-1">
          <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            <option>Bengkulu</option>
            <option>Jambi</option>
            <option>Kep. Bangka Belitung</option>
            <option>Lampung</option>
            <option>Sumatera Selatan</option>
          </select>
          <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </div>

        <label for="country" class="block text-sm/6 font-medium text-gray-900">Kota</label>
        <div class="mt-2 grid grid-cols-1">
          <select id="country" name="country" autocomplete="country-name" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
            <option>Kab. Bengkulu Selatan</option>
            <option>Canada</option>
            <option>Mexico</option>
          </select>
          <svg class="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
            <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </div>
      </div>

      <div class="columns-3 my-4">
        <div class="sm:col-span-3">
          <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First name</label>
          <div class="mt-2">
            <input type="number" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
          </div>
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