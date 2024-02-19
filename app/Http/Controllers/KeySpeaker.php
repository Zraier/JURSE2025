<?php

namespace App\Http\Controllers;

use App\Models\KeyNoteSpeaker;
use Illuminate\Http\Request;

class KeySpeaker extends Controller
{
    public function GetSpeaker()
    {
        $SpeakerData = KeyNoteSpeaker::all();
        return view('pages.key_speaker',compact('SpeakerData'));
    }

    public function show()
    {
        return view('admin.speaker');
    }

    public function AddKeySpeaker(Request $request)
        
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string',
            'description' => 'required|text',
            'website' => 'required|text',
        ]);

        KeyNoteSpeaker::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'description' => $request->input('description'),
            'website' => $request->input('website'),
           
        ]);

        return redirect()->route('speaker')->with('success', 'Key Note Speaker added successfully.');
    }
}
