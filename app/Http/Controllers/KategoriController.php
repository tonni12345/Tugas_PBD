<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
   public function index()
   {
        $kategori = Kategori::all();
        return view('kategori.index', compact('kategori'));
   }

   public function store(Request $request)
   {
        Kategori::create($request->all());
        
        return redirect('kategori');
   }
}
