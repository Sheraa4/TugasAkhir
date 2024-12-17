@extends('main.main')

@section('content')
<div id="app">
    <div class="main-wrapper">
        <div class="main-content  pt-12">
            <div class="container mx-auto p-4">
                <div class="bg-white shadow-lg rounded-lg mt-10">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-700">List Product</h3>
                    </div>
                    <div class="px-6 py-4">
                        @if (session('success'))
                            <div class="mb-4 p-4 text-sm text-green-800 bg-green-100 border border-green-300 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="mb-4 p-4 text-sm text-red-800 bg-red-100 border border-red-300 rounded-lg">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="mb-4 flex justify-between">
                            <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg shadow">
                                New Product
                            </a>
                            <a class="hover:text-gray-200" href="{{ url('/') }}">
                                <img src="{{ asset('img/logo.jpeg') }}" class=" h-12 me-3" alt="" />
                            </a>
                            <a href="{{ route('products.card') }}" class="bg-green-500 hover:bg-green-600 text-white font-medium py-2 px-4 rounded-lg shadow">
                                Show Product
                            </a>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="table-auto w-full border border-gray-200">
                                <thead class="bg-gray-50 border-b border-gray-200">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Image</th>
                                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">ID</th>
                                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Name</th>
                                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Price</th>
                                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Stock</th>
                                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-600">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($products as $product)
                                        <tr class="border-b border-gray-200">
                                            <td class="px-4 py-2">
                                                <img src="{{ asset($product->image) }}" alt="Product Image" class="w-32 h-32 object-cover rounded-lg">
                                            </td>
                                            <td class="px-4 py-2 text-sm text-gray-700">{{ $product->id }}</td>
                                            <td class="px-4 py-2 text-sm text-gray-700">{{ $product->name }}</td>
                                            <td class="px-4 py-2 text-sm text-gray-700">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                            <td class="px-4 py-2 text-sm text-gray-700">{{ $product->stock }}</td>
                                            <td class="py-4 justify-center">
                                                <button onclick="confirmDelete({{ $product->id }})" class="focus:outline-none ml-2 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-4 py-2 text-center text-gray-500">
                                                No record found!
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div id="deleteModal" class="fixed inset-0 flex justify-center items-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg p-6 shadow-lg max-w-sm mx-auto">
        <h3 class="text-lg font-semibold text-gray-800">Apakah Anda yakin ingin menghapus produk ini?</h3>
        <div class="mt-4 flex justify-between">
            <button id="cancelDelete" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md">
            <a href="{{ route('products.index') }}">Batal</a>
            </button>
            <form id="deleteForm" method="POST" class="inline">
            @csrf
            @method('DELETE')
				<button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Hapus</button>
			</form>
        </div>
    </div>
</div>


<script>
    // Fungsi untuk membuka modal konfirmasi
	function confirmDelete(productId) {
    // Menampilkan modal
    document.getElementById('deleteModal').classList.remove('hidden');
    // Menyusun URL form delete berdasarkan produkId
    let deleteForm = document.getElementById('deleteForm');
    deleteForm.action = "{{ url('/products') }}/" + productId;

}
</script>
@endsection
