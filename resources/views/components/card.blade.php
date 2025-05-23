<!-- resources/views/components/card.blade.php -->
<div class="bg-white rounded-2xl shadow-md p-4 hover:shadow-lg transition">
  {{-- Judul --}}
  @isset($title)
    <h2 class="text-xl font-semibold mb-2">{{ $title }}</h2>
  @endisset

    @isset($judul)
    <h2 class="text-xl font-semibold mb-2">{{ $title }}</h2>
  @endisset

  {{-- Isi --}}
  <div>
    {{ $slot }}
  </div>
</div>
