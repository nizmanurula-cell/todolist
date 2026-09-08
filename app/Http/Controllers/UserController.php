<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Menampilkan semua data user.
     */
    public function index()
    {
        // Mengambil semua data user dari tabel users
        $users = \App\Models\User::all();

        // Menampilkan halaman daftar user
        // dan mengirim data $users ke halaman tersebut
        return view('users.index', compact('users'));
    }

    /**
     * Menampilkan form untuk membuat user baru.
     */
    public function create()
    {
        // Menampilkan halaman form tambah user
        return view('users.create');
    }

    /**
     * Menyimpan user baru ke database.
     */
    public function store(Request $request)
    {
        // Mengecek apakah data yang dikirim sudah sesuai aturan
        $request->validate([
            // Nama wajib diisi
            'name' => 'required',

            // Email wajib diisi, harus berupa email,
            // dan tidak boleh sama dengan email user lain
            'email' => 'required|email|unique:users,email',

            // Password wajib diisi dan minimal 8 karakter
            'password' => 'required|min:8',
        ]);

        // Membuat user baru dan menyimpan datanya ke database
        \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,

            // Password diubah menjadi hash sebelum disimpan
            'password' => \Illuminate\Support\Facades\Hash::make($request->password),
        ]);

        // Setelah berhasil disimpan,
        // kembali ke halaman daftar user
        return redirect()->route('users.index');
    }

    /**
     * Menampilkan detail user tertentu.
     */
    public function show(string $id)
    {
        // Mencari user berdasarkan ID
        $user = \App\Models\User::findOrFail($id);

        // Menampilkan halaman detail user
        // dan mengirim data $user ke halaman tersebut
        return view('users.show', compact('user'));
    }

    /**
     * Menampilkan form untuk mengedit user.
     */
    public function edit(string $id)
    {
        // Mencari user berdasarkan ID
        $user = \App\Models\User::findOrFail($id);

        // Menampilkan halaman form edit user
        // dan mengirim data $user ke halaman tersebut
        return view('users.edit', compact('user'));
    }

    /**
     * Memperbarui data user di database.
     */
    public function update(Request $request, string $id)
    {
        // Mencari user yang ingin diubah berdasarkan ID
        $user = \App\Models\User::findOrFail($id);

        // Mengecek apakah data yang dikirim sudah sesuai aturan
        $request->validate([
            // Nama wajib diisi
            'name' => 'required',

            // Email wajib diisi, harus berupa email,
            // dan tidak boleh sama dengan email user lain
            // kecuali email milik user yang sedang diedit
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        // Mengubah data user sesuai data dari form
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Setelah berhasil diubah,
        // kembali ke halaman daftar user
        return redirect()->route('users.index');
    }

    /**
     * Menghapus user dari database.
     */
    public function destroy(string $id)
    {
        // Mencari user berdasarkan ID
        $user = \App\Models\User::findOrFail($id);

        // Menghapus user dari database
        $user->delete();

        // Setelah berhasil dihapus,
        // kembali ke halaman daftar user
        return redirect()->route('users.index');
    }
}