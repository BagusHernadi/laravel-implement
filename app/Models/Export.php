<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Export extends Model
{
    protected $fillable = [
        'nama',
        'tanggal',
        'jumlah',
    ];

    public function export(Request $request)
    {
        // Validate and export the data
        $export = new Export();
        $export->nama = $request->input('nama');
        $export->tanggal = $request->input('tanggal');
        $export->jumlah = $request->input('jumlah');
        $export->save();
        return redirect()->route('export.index');
    }
}
