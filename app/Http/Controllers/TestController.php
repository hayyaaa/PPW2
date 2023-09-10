<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // menampilkan data -> GET
        // method untuk menampilkan halaman utama
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan form -> GET
        // method untuk menampilkan form create post
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // submit data untuk dikirim ke database -> POST
        // method untuk melakukan insert data ke dalam database
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // GET
        // method untuk menampilkan single post atau detail dr sebuah post
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // GET
        // method untuk menampilkan halaman edit post
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // PUT / PATCH
        // method untuk melakukan update data post ke database
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // DELETE
        // method untuk menghapus data post
    }
}
