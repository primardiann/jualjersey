<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
</div>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Tampilan Awal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <nav class="border-gray-200 bg-gray-100 p-4">
        <div class="max-w-screen-xl mx-auto flex items-center justify-between">
            <a href="https://flowbite.com" class="flex items-center space-x-4">
                <img src="images/logo.jpg" class="w-12 h-12 rounded-full" alt="Rounded avatar">
                <span class="text-4xl font-bold whitespace-nowrap">Concert.tix</span>
            </a>
            <form class="max-w-md mx-auto">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <input type="search" id="default-search"
                        class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search...">
                    <button type="submit"
                        class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                </div>
            </form>
            <div class="flex items-center space-x-4">
                <a href="#"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Admin</a>
                <div class="relative w-10 h-10 overflow-hidden bg-gray-200 rounded-full">
                    <img src="https://via.placeholder.com/150" alt="Profile image"
                        class="absolute w-12 h-12 text-gray-400">
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        <h2 class="text-2xl font-bold text-center mb-6">Konser Aktif</h2>
        <div class="flex flex-wrap justify-center gap-6">
            @foreach ($concerts as $concert)
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-lg">
                    <a href="#">
                        <img class="rounded-t-lg h-48 w-full object-cover"
                            src="{{ asset('images/' . $concert->gambar) }}" alt="{{ $concert->nama }} concert"></a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $concert->nama }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700">{{ $concert->tanggal }}</p>
                        <a href="{{ route('admin.edit_tiket', ['id' => $concert->id]) }}"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Harga Tiket
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</body>

</html>
