<!-- resources/views/admin_tiket_create.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Concert Ticket</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">

    <nav class="border-gray-200 bg-gray-100 p-4">
        <div class="max-w-screen-xl mx-auto flex items-center justify-between">
            <a href="#" class="flex items-center space-x-4">
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
        <h2 class="text-2xl font-bold text-center mb-6">Create Concert Ticket</h2>
        <!-- Isi dengan form untuk membuat tiket konser baru -->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
