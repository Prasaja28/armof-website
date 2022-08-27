<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Antropometri;

class AntropometriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antropometri = Antropometri::all();
        return view('admin/antropometri-admin/index', compact('antropometri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required',
        ]);

        if ($request->hasfile('images')) {
            $images = $request->file('images');

            foreach ($images as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('antropometri-img', $name, 'public');

                Antropometri::create([
                    'foto' => '/img/' . $path,
                    'status' => 1
                ]);
            }
        }

        return redirect('/antropometri-admin')->with('success', 'Images uploaded successfully');
    }

    public function destroy($id)
    {
        $data = Antropometri::findOrFail($id);
        $data->delete();
        Storage::delete($data->foto);
        return redirect('/antropometri-admin');
    }
}
