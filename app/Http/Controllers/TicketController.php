<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);

        // Menggunakan metode custom
        $formattedPrice = $ticket->getFormattedPrice();
        $isAvailable = $ticket->isAvailable();

        return view('ticket.show', compact('ticket', 'formattedPrice', 'isAvailable'));
    }

    public function decreaseStock($id, Request $request)
    {
        $ticket = Ticket::findOrFail($id);
        $quantity = $request->input('quantity', 1);

        if ($ticket->decreaseStock($quantity)) {
            return redirect()->back()->with('success', 'Stock decreased successfully.');
        }

        return redirect()->back()->with('error', 'Insufficient stock.');
    }
}
