<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.tambah');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image_url = $request->file('image_url');
        $image_url->storeAs('public/products', $image_url->hashName());
        $products = Products::create([
            'product_name' => $request->product_name,
            'image_url' => $image_url->hashName(),
            'description' => $request->description,
            'price' => $request->price,
            'type' => $request->type,
        ]);
        if ($products) {
            return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            return redirect()->route('products.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Products $product)
    {
        $requestData = $request->except(['_token', '_method']);

        if ($request->hasFile('image_url')) {
            // Hapus gambar lama
            Storage::delete('public/products/' . $product->image_url);

            // Simpan gambar baru
            $image = $request->file('image_url');
            $image->storeAs('public/products', $image->hashName());
            $requestData['image_url'] = $image->hashName();
        }

        if ($product->update($requestData)) {
            return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui!');
        } else {
            return redirect()->route('products.index')->with('error', 'Gagal memperbarui produk!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $product)
{
    // Hapus gambar dari penyimpanan sebelum menghapus data produk
    Storage::delete('public/products/' . $product->image_url);

    if ($product->delete()) {
        return redirect()->route('products.index')->with(['success' => 'Produk berhasil dihapus!']);
    } else {
        return redirect()->route('products.index')->with(['error' => 'Gagal menghapus produk!']);
    }
}

}
