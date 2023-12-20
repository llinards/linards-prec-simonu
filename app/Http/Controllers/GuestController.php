<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GuestController extends Controller
{
    public function store(StoreGuestRequest $data)
    {
        try {
            Guest::create($data->validated());
            return redirect()->to(app('url')->previous()."#rsvp")->with('success', 'Paldies! Informācija reģistrēta!');
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->to(app('url')->previous()."#rsvp")->with('error', 'Notikusi kļūda! Mēģini vēlreiz.');
        }
    }
}
