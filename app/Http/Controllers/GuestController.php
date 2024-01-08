<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('guests'));
    }

    public function destroy(Guest $guest)
    {
        $guest->delete();
        return redirect()->route('dashboard');
    }
}
