<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Reservasi;
use Illuminate\Http\Request;

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

    

    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        {
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
    
        Reservasi::create($validated);
    
        return redirect()->route('home')->with('success', 'Reservasi berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservasi $reservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservasi $reservasi)
    {
        //
    }
}
