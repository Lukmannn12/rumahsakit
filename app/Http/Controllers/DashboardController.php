<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Count()
    {
        $dokterCount=User::where('role','dokter')->count();

        $reservasiCount=Reservasi::count();

        return view('admin.dashboard', compact('dokterCount','reservasiCount'));
    }
}
