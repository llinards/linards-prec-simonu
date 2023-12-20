<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GuestController extends Controller
{
    public function store(StoreGuestRequest $data)
    {
        try {
            return redirect()->to(app('url')->previous()."#rsvp")->with('message', 'Paldies! Informācija reģistrēta!');
        } catch (\Throwable $th) {
            Log::error($th);
            return redirect()->to(app('url')->previous()."#rsvp")->with('message', 'Notikusi kļūda!');
        }
    }
}
