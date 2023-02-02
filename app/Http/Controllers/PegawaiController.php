<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pegawai')->insert([
            'name' => $request->name,
            'email' => $request->email,
            // 'no_telp' => $request->notelp,
            // 'alamat' => $request->alamat,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function index()
    {
        // mengambil data dari table user
        $pegawai =  DB::table('pegawai')->get();

        // mengirim data user ke view index
        return view('index', ['pegawai' => $pegawai]);
        // return $user;
    }

    // method untuk destroy data pegawai
    public function destroy($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pegawai')->where('id', $id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }

    public function edit($id)
    {
        // mengambil data user berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('id', $id)->get();
        // passing data user yang didapat ke view edit.blade.php
        return view('edit', ['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
        // update data user
        DB::table('pegawai')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        // alihkan halaman ke halaman user
        return redirect('/pegawai');
    }
}
