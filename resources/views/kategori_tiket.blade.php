@extends('layouts.app') @section('content')
<div class="container mx-auto">
    <div class="px-4 py-8">

        <h1 class="text-3xl font-bold mb-6">Kategori Tiket</h1>

        @if (session('success'))
        <div class="bg-green-200 p-3 mb-4 rounded-md">
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($tickets as $ticket)
            <div class="bg-white p-6 rounded-lg shadow-md">
                <img
                    src="{{ asset('images/' . $ticket->gambar) }}"
                    alt="{{ $ticket->category }}"
                    class="w-full h-48 object-cover mb-4 rounded-lg">
                <h2 class="text-xl font-bold">{{ $ticket->category }}</h2>
                <p class="text-gray-600">{{ $ticket->stock }}
                    tiket tersedia</p>
                <p class="text-gray-800 font-semibold mt-2">Rp
                    {{ number_format($ticket->price, 0, ',', '.') }}</p>

                <form action="{{ route('beli_tiket') }}" method="POST" class="mt-4">
                    @csrf
                    <input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
                    <label for="quantities" class="block mb-2">Jumlah Tiket</label>
                    <input
                        type="number"
                        name="quantities[{{ $ticket->id }}]"
                        id="quantities"
                        class="w-full border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 rounded-md px-3 py-2"
                        min="1"
                        required="required">
                    <button
                        type="submit"
                        class="mt-3 inline-block px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Beli Tiket</button>
                </form>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection