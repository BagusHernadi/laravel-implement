<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Import extends Model
{
    protected $fillable = [
        'nama',
        'tanggal',
        'jumlah',
    ];

    public function import(Request $request)
    {
        // Validate and import the data
        $import = new Import();
        $import->nama = $request->input('nama');
        $import->tanggal = $request->input('tanggal');
        $import->jumlah = $request->input('jumlah');
        $import->save();
        return redirect()->route('import.index');
    }
}
