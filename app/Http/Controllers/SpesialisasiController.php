<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Spesialisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpesialisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spesialisasis = Spesialisasi::all();
        return view('admin.spesialisasi.index', compact('spesialisasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.spesialisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_spesialisasi' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('spesialisasi', 'public');
        }
        Spesialisasi::create([
            'user_id' => Auth::id(),
            'nama_spesialisasi' => $request->nama_spesialisasi,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('spesialisasi.index')->with('success', 'Data Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Spesialisasi $spesialisasi)
    {
        $dokters = Profile::with('user')
            ->where('spesialis_id', $spesialisasi->id)
            ->get();

        return view('user.chatdokter.index', [
            'profiledokter' => $dokters,
            'spesialisasi' => $spesialisasi,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Spesialisasi $spesialisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Spesialisasi $spesialisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Spesialisasi $spesialisasi)
    {
        //
    }
}
