<?php

namespace App\Http\Controllers;
use App\Models\Buah;

use Illuminate\Http\Request;

class BuahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buah = Buah::all();
        return view('buah.page-buah', compact('buah'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('buah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);
    
        // Buat instance baru untuk model Buah
        $data = new Buah();
        $data->nama = $request->nama;
        $data->price = $request->price;
        $data->stock = $request->stock;
    
        
        if ($data->save()) {
           
            return redirect()->route('page-buah')->with('success', 'Data buah berhasil ditambahkan');
        } else {
            
            return redirect()->back()->with('failed', 'Gagal menambahkan data buah, silakan coba lagi');
        }
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buah = Buah::findOrFail($id); // Get the fruit item
         return view('buah.edit', compact('buah')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'nama' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Find the fruit item by ID
        $buah = Buah::findOrFail($id);

        // Update the fruit item
        $buah->nama = $request->input('nama');
        $buah->price = $request->input('price');
        $buah->stock = $request->input('stock');
        $buah->save();

        // Redirect or return response
        return redirect()->route('page-buah')->with('success', 'Data berhasil diupdate');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $buah = Buah::find($id);
        $buah->delete();
        return redirect()->route('page-buah')->with('success', 'Data Berhasil Dihapus');
    }
}
