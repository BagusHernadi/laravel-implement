<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'nama',
        'tanggal',
        'jumlah',
    ];
}

$invoices = Invoice::all();

$invoice = Invoice::create([
    'nama' => 'Invoice Baru',
    'tanggal' => '2022-01-01',
    'jumlah' => 100,
]);

