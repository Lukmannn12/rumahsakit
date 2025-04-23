<?php

namespace App\Http\Controllers\Dokter;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index()
    {
        // Ambil profil user yang sedang login
        $profile = Profile::where('user_id', Auth::id())->first();

        // Inisialisasi array reservasi
        $reservasis = [];

        // Jika profil ditemukan, ambil data reservasi yang terkait dengan profil
        if ($profile) {
            $reservasis = Reservasi::with('profile.user', 'profile.spesialisasi')
                ->where('profile_id', $profile->id)
                ->get();
        }

        // Kirim data reservasis ke view
        return view('dokter.dashboard', compact('reservasis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
