<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; //memanggil model Buku.php, yang didalamnya ada definisi tabel yang digunakan, yaitu tabel buku.

class BukuController extends Controller
{
    //fungsi index
    public function index() {
        $data_buku = Buku::all();
        // Buku::all( ) untuk menampilkan semua data buku pada tabel buku.

        // menghitung jumlah baris
        $jumlah_data = Buku::count();

        // menghitung total harga
        $total_harga = 0;
        foreach ($data_buku as $buku) {
            $total_harga = $total_harga +  (int)$buku->harga;
        }

        return view('buku.index', compact('data_buku', 'jumlah_data', 'total_harga'));
        //Compact( ) untuk mem-passing/mengirimkan variabel dari Controller ke View.

    }

    public function create() {
        return view('buku.create');
    }

    public function store(Request $request) {
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id) {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }

    public function edit($id) {
        $buku = Buku::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id) {
        $buku = Buku::find($id);
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl_terbit' => $request->tgl_terbit
        ]);
        return redirect('/buku');
    }
}