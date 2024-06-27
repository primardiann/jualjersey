<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Informasi Tiket Konser</title>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"/>
    </head>

    <body class="bg-gray-100">
        <div class="container mx-auto py-8">
            <h2 class="text-2xl font-bold text-center mb-6">Edit Informasi Tiket Konser</h2>

            @if (session('success'))
            <div
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
            @endif

            <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
                <form
                    action="{{ route('admin.update_tiket', ['id' => $concert->id]) }}"
                    method="POST">
                    @csrf @method('PUT')

                    <div class="mb-4">
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Konser</label>
                        <input
                            type="text"
                            name="nama"
                            id="nama"
                            value="{{ $concert->nama }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>

                    <div class="mb-4">
                        <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Konser</label>
                        <input
                            type="date"
                            name="tanggal"
                            id="tanggal"
                            value="{{ $concert->tanggal }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>

                    <div class="mb-4">
                        <label for="gambar" class="block text-sm font-medium text-gray-700">URL Gambar</label>
                        <input
                            type="text"
                            name="gambar"
                            id="gambar"
                            value="{{ $concert->gambar }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Konser</label>
                        <textarea
                            name="deskripsi"
                            id="deskripsi"
                            rows="3"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ $concert->deskripsi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="harga" class="block text-sm font-medium text-gray-700">Harga Tiket</label>
                        <input
                            type="text"
                            name="harga"
                            id="harga"
                            value="{{ $concert->harga }}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>

                    <div class="flex justify-end">
                        <button
                        
                            type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </body>

</html>