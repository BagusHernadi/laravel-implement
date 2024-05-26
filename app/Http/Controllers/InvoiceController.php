<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice; // Menentukan namespace dari model Invoice

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        // Validate and store the invoice
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric',
        ]);

        $invoice = Invoice::create([
            'nama' => $request->input('nama'),
            'tanggal' => $request->input('tanggal'),
            'jumlah' => $request->input('jumlah'),
        ]);

        return redirect()->route('invoices.index');
    }

    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        return view('invoices.edit', compact('invoice'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        // Validate and update the invoice
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'jumlah' => 'required|numeric',
        ]);

        $invoice->update($request->all());
        return redirect()->route('invoices.index');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect()->route('invoices.index');
    }
}
