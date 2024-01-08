<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Storage;

class TransactionController extends Controller
{

    public function index()
    {
        $transaction = transaction::latest()->paginate(10);
        return view('transaction.index', compact('transaction'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'amount' => 'required',
        'account_id' => 'required',
        'password' => 'required',
        'note' => 'required',
        'payment_method' => 'required',
        'whatsapp_number' => 'required',
        'product_id' => 'required', // Pastikan product_id juga divalidasi
    ]);

    $transaction = Transaction::create($validatedData);

    if ($transaction) {
        return redirect()->route('transaction.index')->with(['success' => 'Data Berhasil Disimpan!']);
    } else {
        return redirect()->route('transaction.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}
}
