<?php

namespace App\Http\Controllers;

use App\Models\Marker;
use Illuminate\Http\Request;

class MarkerController extends Controller
{
    public function marker()
    {
        $markers = Marker::all();
        return view('map-marker', compact('markers'));
    }
    public function add()
    {
        return view('map-marker-add');
    }
    public function store()
    {
        Marker::create([
            'title'=>request()->title,
            'latitude'=>request()->latitude,
            'longitude'=>request()->longitude
        ]);
        return redirect()->route('marker');;
    }
}
