<div class="ml-10 mt-20">
    <div class="overflow-x-auto">
        <table class="min-w-full border border-blue-200 rounded-lg shadow bg-white">
            <thead class="bg-blue-100 text-blue-700">
                <tr>
                    <th class="py-3 px-6 text-left border-b border-blue-200">No</th>
                    <th class="py-3 px-6 text-left border-b border-blue-200">Nama Produk</th>
                    <th class="py-3 px-6 text-left border-b border-blue-200">Deskripsi Produk</th>
                    <th class="py-3 px-6 text-left border-b border-blue-200">Harga Produk</th>
                </tr>
            </thead>
            <tbody class="text-blue-900">
                @foreach ($nama as $index => $item)
                    <tr class="hover:bg-blue-50 border-b border-blue-100">
                        <td class="py-2 px-6">{{ $index + 1 }}</td>
                        <td class="py-2 px-6">{{ $item }}</td>
                        <td class="py-2 px-6">{{ $desc[$index] }}</td>
                        <td class="py-2 px-6">Rp{{ number_format($harga[$index], 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="ml-10 mt-16 max-w-2xl">
    <h1 class="text-2xl font-bold text-blue-700 mb-4">Input Produk</h1>
    <form method="POST" action="{{ route('produk.simpan') }}" class="bg-white p-6 rounded-lg shadow border border-blue-200">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-blue-700 font-semibold mb-1">Nama Produk</label>
            <input type="text" id="nama" name="nama"
                   class="w-full border border-blue-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block text-blue-700 font-semibold mb-1">Deskripsi Produk</label>
            <textarea id="deskripsi" name="deskripsi"
                      class="w-full border border-blue-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
        </div>
        <div class="mb-6">
            <label for="harga" class="block text-blue-700 font-semibold mb-1">Harga Produk</label>
            <input type="number" id="harga" name="harga"
                   class="w-full border border-blue-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
        </div>
        <button type="submit"
                class="bg-blue-500 text-white font-semibold px-6 py-2 rounded-md hover:bg-blue-600 transition duration-200">
            Simpan
        </button>
    </form>
</div>
