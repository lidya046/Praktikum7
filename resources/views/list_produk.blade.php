<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-800 min-h-screen">

    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-blue-700 mb-6 text-center">Daftar Produk</h1>

        <div class="overflow-x-auto shadow-md rounded-lg bg-white p-6 border border-blue-100">
            <table class="min-w-full text-sm text-left">
                <thead class="bg-blue-100 text-blue-700">
                    <tr>
                        <th class="py-3 px-4 border-b">No</th>
                        <th class="py-3 px-4 border-b">Nama Produk</th>
                        <th class="py-3 px-4 border-b">Deskripsi Produk</th>
                        <th class="py-3 px-4 border-b">Harga Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nama as $index => $item)
                    <tr class="hover:bg-blue-50">
                        <td class="py-2 px-4 border-b">{{ $index + 1 }}</td>
                        <td class="py-2 px-4 border-b">{{ $item }}</td>
                        <td class="py-2 px-4 border-b">{{ $desc[$index] }}</td>
                        <td class="py-2 px-4 border-b">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h2 class="text-2xl font-semibold text-blue-700 mt-12 mb-4 text-center">Input Produk Baru</h2>

        <form method="POST" action="{{ route('produk.simpan') }}" class="bg-white p-6 rounded-lg shadow-md border border-blue-100 max-w-2xl mx-auto">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="nama" class="block font-medium text-blue-600 mb-1">Nama Produk:</label>
                    <input type="text" id="nama" name="nama" class="w-full border border-blue-200 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400">
                </div>

                <div>
                    <label for="harga" class="block font-medium text-blue-600 mb-1">Harga Produk:</label>
                    <input type="number" id="harga" name="harga" class="w-full border border-blue-200 rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-400">
                </div>

                <div class="md:col-span-2">
                    <label for="deskripsi" class="block font-medium text-blue-600 mb-1">Deskripsi Produk:</label>
                    <textarea id="deskripsi" name="deskripsi" class="w-full border border-blue-200 rounded px-3 py-2 h-28 focus:outline-none focus:ring focus:border-blue-400"></textarea>
                </div>
            </div>

            <div class="mt-6 text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded shadow">
                    Simpan Produk
                </button>
            </div>
        </form>
    </div>

</body>
</html>
