<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        // logic untuk menampilkan data
    }

    public function create()
    {
        // logic untuk menampilkan form create
    }

    public function store(Request $request)
    {
        // logic untuk menyimpan data
    }

    public function show($id)
    {
        // logic untuk menampilkan data dengan id tertentu
    }

    public function edit($id)
    {
        // logic untuk menampilkan form edit
    }

    public function update(Request $request, $id)
    {
        // logic untuk mengupdate data dengan id tertentu
    }

    public function destroy($id)
    {
        // logic untuk menghapus data dengan id tertentu
    }
}