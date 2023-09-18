<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;


class BukuSeeder extends Seeder
{
    public function run(): void
    {
        Buku::create([
            'judul' => 'Matahari',
            'penulis' => 'Tere Liye',
            'harga' => 99000,
            'tgl_terbit' => '2016-02-01',
        ]);

        Buku::create([
            'judul' => 'The Star and I',
            'penulis' => 'Ilana Tan',
            'harga' => 100000,
            'tgl_terbit' => '2020-05-19',
        ]);

        Buku::create([
            'judul' => 'Serendipity',
            'penulis' => 'Erisca Febriani',
            'harga' => 98000,
            'tgl_terbit' => '2021-07-25',
        ]);
    }
}