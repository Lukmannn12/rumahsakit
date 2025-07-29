<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Reservasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservasis = Reservasi::with('profile.user', 'profile.spesialisasi')->get();
        return view('admin.datareservasi.index', compact('reservasis'));
    }

    // public function ReservasiCount()
    // {
    //     $ReservasiCount = Reservasi::count();
    //     return view('admin.dashboard', compact('ReservasiCount'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    { {
            $profileId = $request->query('profile_id');
            $profile = Profile::findOrFail($profileId);

            return view('user.reservasi.create', compact('profile'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'profile_id' => 'required|exists:profiles,id',
            'reservation_date' => 'required|date',
        ]);

        $user = Auth::user();

        Reservasi::create([
            'name' => $validated['name'],
            'profile_id' => $validated['profile_id'],
            'reservation_date' => $validated['reservation_date'],
            'user_id' => $user->id, // ← tambahkan ini
        ]);

        return back()->with('success', 'Reservasi berhasil dibuat!');
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
        // Ambil data reservasi berdasarkan ID
        $reservasi = Reservasi::findOrFail($id);

        // Tampilkan view edit dengan data reservasi
        return view('reservasi.edit', compact('reservasi'));
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

    public function dataresevasi()
    {

        $profile = Profile::where('user_id', Auth::id())->first();

        // Inisialisasi array reservasi
        $reservasis = [];

        // Jika profil ditemukan, ambil data reservasi yang terkait dengan profil
        if ($profile) {
            $reservasis = Reservasi::with('profile.user', 'profile.spesialisasi')
                ->where('profile_id', $profile->id)
                ->get();
        }
        return view('dokter.datareservasi.index', compact('reservasis'));
    }

    public function historyUser()
    {
        // Ambil data reservasi milik user yang sedang login
        $reservasis = Reservasi::with('user', 'profile.user', 'profile.spesialisasi')
            ->where('user_id', Auth::id())
            ->get();

        return view('user.reservasi.history', compact('reservasis'));
    }
}
