<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku; //memanggil model Buku.php, yang didalamnya ada definisi tabel yang digunakan, yaitu tabel buku.

class BukuController extends Controller
{
    //fungsi index
    public function index() {
        $data_buku = Buku::all()->sortByDesc('id');
        // Buku::all( ) untuk menampilkan semua data buku pada tabel buku.

        return view('buku.index', compact('data_buku'));
        //Compact( ) untuk mem-passing/mengirimkan variabel dari Controller ke View.

    }
}