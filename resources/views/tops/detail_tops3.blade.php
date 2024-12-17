@extends ('main.main')

@section('content')

        <!-- <div class="col-md-6">
            <h2 class="fw-bold">Golden Glow Top</h2>
            <p class="text-muted">Atasan kuning terang dengan aksen pita besar di leher. Ideal untuk gaya ceria namun tetap elegan.</p>
            <p class="fs-4 text-danger">IDR 320.000</p> -->
            
<main class="container mx-auto my-10 pt-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Gambar -->
        <div class="flex justify-center">
            <img src="{{ asset('img/TOPS3.svg') }}" class="w-[450px] h-[500px] object-cover rounded-md" alt="Golden Glow Top">
        </div>
        <!-- Detail Produk -->
        <!-- <div class="col-md-6">
            <h2 class="text-2xl font-bold mb-2">Golden Glow Top</h2>
            <p class="text-gray-600 mb-4">Atasan kuning lembut dengan pita besar di bagian kerah. Desainnya menghadirkan sentuhan glamor untuk acara spesial.</p>
            <p class="text-2xl text-red-500 font-medium mb-6">IDR 320.000</p>     -->
            <div class="col-md-6">
            <h2 class="text-2xl font-bold mb-2">Golden Glow Top</h2>
            <p class="text-gray-600 mb-4">Atasan kuning lembut dengan pita besar di bagian kerah. Desainnya menghadirkan sentuhan glamor untuk acara spesial.</p>
            <p class="text-2xl text-red-500 font-medium mb-6">IDR 320.000</p>     
        <!-- Ukuran -->
            <div class="mb-6">
                <label class="font-semibold block mb-2">Ukuran:</label>
                <div class="flex gap-2">
                    <input type="radio" class="hidden" id="size-36" name="ukuran">
                    <label for="size-36" class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100">S</label>

                    <input type="radio" class="hidden" id="size-37" name="ukuran">
                    <label for="size-37" class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100">M</label>

                    <input type="radio" class="hidden" id="size-38" name="ukuran">
                    <label for="size-38" class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100">L</label>

                    <input type="radio" class="hidden" id="size-39" name="ukuran">
                    <label for="size-39" class="px-4 py-2 border border-gray-300 rounded-md cursor-pointer hover:bg-gray-100">XL</label>
                </div>
            </div>

            <!-- Tombol Beli -->
            <button class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-800 transition">BELI SEKARANG</button>
            <button class="w-full mt-2 border border-black text-black py-2 rounded-md hover:bg-gray-100 transition">TAMBAH KE FAVORIT</button>

            <!-- Kategori -->
            <p class="mt-4 text-gray-600">
                Kategori: <span class="font-semibold">Tops</span>
            </p>
        </div>
    </div>
</main>

@endsection