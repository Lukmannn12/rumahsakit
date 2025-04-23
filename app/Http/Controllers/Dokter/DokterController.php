<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Spesialisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $profile = $user->profile; // Ambil relasi profile dari user
    
        return view('dokter.profile.index', compact('user', 'profile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $spesialisasis = Spesialisasi::all();
        return view('dokter.profile.update', compact('spesialisasis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'spesialis_id' => 'required|exists:spesialisasis,id',
            'years_of_experience' => 'required|integer|min:0',
            'price' => 'required|string|max:255',
            'alumni' => 'required|string|max:255',
            'practice_location' => 'required|string|max:255',
            'str_number' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Proses upload gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('profiledokter', 'public');
        }

        // Simpan data ke database
        Profile::create([
            'user_id' => Auth::id(),
            'spesialis_id' => $request->spesialis_id,
            'years_of_experience' => $request->years_of_experience,
            'price' => $request->price,
            'alumni' => $request->alumni,
            'practice_location' => $request->practice_location,
            'str_number' => $request->str_number,
            'gambar' => $gambarPath,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('profiledokter.index')->with('message', 'Profil dokter berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        return view('dokter.update', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
