<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Spesialisasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        $spesialis = Spesialisasi::all();
        return view('user.home.index', compact('spesialis'));
    }

    public function layanan()
    {
        $spesialis = Spesialisasi::all();
        return view('user.layanan.index', compact('spesialis'));
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
