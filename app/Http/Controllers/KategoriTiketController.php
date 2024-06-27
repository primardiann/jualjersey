<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\OrderDetail;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class KategoriTiketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('kategori_tiket', compact('tickets'));
    }

    public function beliTiket(Request $request)
    {
        // Validasi input di sini jika diperlukan
        $quantities = $request->input('quantities');

        $grandTotal = 0;

        foreach ($quantities as $ticketId => $quantity) {
            $ticket = Ticket::findOrFail($ticketId);
            $total = $ticket->price * $quantity;
            $grandTotal += $total;
        }

        return redirect()->route('kategori_tiket')->with('success', 'Pembelian tiket berhasil.');
    }
}
