<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 p-10">
    <div class="max-w-xl mx-auto bg-white p-8 rounded shadow">
        <h1 class="text-2xl font-bold mb-6 text-blue-700 text-center">Edit Produk</h1>

        <form action="{{ route('produk.update', $produk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="block text-blue-600">Nama Produk:</label>
                <input type="text" name="nama" id="nama" value="{{ $produk->nama }}" class="w-full border px-3 py-2 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-blue-600">Harga Produk:</label>
                <input type="number" name="harga" id="harga" value="{{ $produk->harga }}" class="w-full border px-3 py-2 rounded mt-1">
            </div>
            <div class="mb-6">
                <label for="deskripsi" class="block text-blue-600">Deskripsi Produk:</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" class="w-full border px-3 py-2 rounded mt-1">{{ $produk->deskripsi }}</textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
