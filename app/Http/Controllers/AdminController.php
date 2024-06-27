<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concert;
use App\Models\Ticket;

class AdminController extends Controller
{
    public function index()
    {
        $concerts = Concert::all(); // Mengambil semua data konser dari database
        return view('admin_home', compact('concerts')); // Mengirim data ke view
    }

    public function editTiket($id)
    {
        $concert = Concert::findOrFail($id); // Mengambil data konser berdasarkan ID
        return view('admin_edit_tiket', compact('concert'));
    }

    public function create()
    {
        return view('admin_tiket_create');
    }

    public function store(Request $request)
    {
        // Validasi request
        $request->validate([
            'nama_konser' => 'required|string',
            'tanggal' => 'required|date',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data ke dalam database
        $concert = new Concert();
        $concert->nama_konser = $request->input('nama_konser');
        $concert->tanggal = $request->input('tanggal');
        // tambahkan atribut lain yang diperlukan

        $concert->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.home')->with('success', 'Konser berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $concert = Concert::findOrFail($id);
        return view('admin_edit_tiket', compact('concert'));
    }

    public function update(Request $request, $id)
    {
        // Validasi request
        $request->validate([
            'nama_konser' => 'required|string',
            'tanggal' => 'required|date',
            'gambar' => 'nullable|image', // Validasi untuk gambar (opsional)
            'harga_tiket' => 'nullable|numeric', // Validasi untuk harga tiket (opsional)
        ]);

        $concert = Concert::findOrFail($id);

        // Update nilai atribut dari request
        $concert->nama_konser = $request->input('nama_konser');
        $concert->tanggal = $request->input('tanggal');
        // tambahkan atribut lain yang diperlukan

        // Simpan perubahan ke dalam database
        $concert->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.home')->with('success', 'Informasi konser berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $concert = Concert::findOrFail($id);
        $concert->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.home')->with('success', 'Konser berhasil dihapus.');
    }
}
