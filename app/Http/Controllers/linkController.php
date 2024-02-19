<?php

namespace App\Http\Controllers;

use App\Models\link;
use Illuminate\Http\Request;

class linkController extends Controller
{
    public function GetLink()  {
        $LinkData = link::all();
        return view('pages.socialevent',compact('LinkData'));
    }

    public function show()
    {
        return view('admin.social');
    }

    public function Addlink(Request $request)
        

        {
            $request->validate([
                'name_event' => 'required|string|max:255',
                'name_link' => 'required|string',
            ]);
    
            link::create([
                'name' => $request->input('name_event'),
                'href' => $request->input('name_link'),
            ]);
    
            return redirect()->route('Social')->with('success', 'Link created successfully.');
        }
    



}
