<?php

namespace App\Http\Controllers;

use App\Models\Waitlist;
use Illuminate\Http\Request;

class WaitlistController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255|unique:waitlists,email',
        ]);

        Waitlist::create($validated);


        return redirect()->back()->with('success', 'Joined waitlist.');
    }
}
