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

    <!-- Pertalite -->
    <div>
      <label class="block font-medium mb-1">Stok Akhir Pertalite</label>
      <input type="number" name="stok_pertalite" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Penjualan Pertalite</label>
      <input type="number" name="jual_pertalite" class="w-full border rounded px-3 py-2">
    </div>
    <div>
      <label class="block font-medium mb-1">Tera Pertalite</label>
      <input type="number" name="tera_pertalite" class="w-full border rounded px-3 py-2">
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