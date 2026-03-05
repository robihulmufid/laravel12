<?php

namespace App\Http\Controllers;
use App\Models\Profil;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = Profil::first();
        return view('admin.profil', compact('profil'));
    }
}
