<?php

namespace App\Http\Controllers;

use App\Models\sanataCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class santacodeController extends Controller
{
    protected $lifetime = 30;

    function verify(Request $request)
    {
        $request->validate([
            'code' => 'required|string'
        ]);

        $code = $request->input('code');

        $found = sanataCode::where('code', $code)->first();

        if (! $found) {
            return back()->with('error', 'Invalid code. Please try again.')->withInput();
        }

        // Save session values: granted_at and expires_at (use Carbon)
        $grantedAt = Carbon::now();
        $expiresAt = $grantedAt->copy()->addMinutes($this->lifetime);

        session([
            'santa.access_granted' => true,
            'santa.granted_at'     => $grantedAt->toDateTimeString(),
            'santa.expires_at'     => $expiresAt->toDateTimeString(),
        ]);

        // Optionally redirect to intended or randomizer
        return redirect()->intended(route('monitoring'));
    }

    public function logout(Request $request)
    {
        // remove session keys
        $request->session()->forget(['santa.access_granted', 'santa.granted_at', 'santa.expires_at']);
        return redirect()->route('santa.show');
    }

    public function index(){
        return view('code');
    }
}
