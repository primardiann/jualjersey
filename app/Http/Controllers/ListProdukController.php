<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProdukController extends Controller
{
    public function getData()
    {
        $databarang = [
            ['id' => 1, 'produk' => "Jersey Real Madrid Home"],
            ['id' => 2, 'produk' => "Jersey Arsenal Home"],
            ['id' => 3, 'produk' => "Jersey Liverpool Away"],
            ['id' => 4, 'produk' => "Jersey Tottenham Away"],
            ['id' => 5, 'produk' => "Jersey Paris Saint-Germain Third"],
            
        ];

        return $databarang;
    }

    public function tampilkan(){
        $data = $this->getData();
        return view('list_product', compact('data'));
    }
}
