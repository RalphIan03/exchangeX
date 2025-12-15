<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\participants;

class participantsController extends Controller
{
    function index(){

        $participantList = participants::orderBy('status', 'asc')->paginate(10);
        return view('viewparticipant', [ 'participants'=> $participantList]);
    }

    function create(Request $values){
        $validated = $values->validate([
            'username' =>'required',
            'name' => 'required',
            'status'=> 'required|integer|min:0|max:1',
            'wishlist' => 'required'
        ]);
        participants::create($validated);

        return redirect('/');
    }
}
