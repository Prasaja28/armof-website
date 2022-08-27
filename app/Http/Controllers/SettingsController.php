<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::all();
        return view('admin.settings-admin.index', compact('settings'));
    }

    public function update(Request $request)
    {
        if ($request->hasFile('value')) {
            $file = $request->file('value');
            $name = $file->getClientOriginalName();
            $path = 'img/settings-img/';
            $file->move($path, $name);

            $settings = Settings::find($request->id);
            $settings->value = $path . $name;
            $settings->save();
            return redirect()->back()->with('success', 'Berhasil mengubah gambar');
        } else {
            $settings = Settings::find($request->id);
            $settings->value = $request->value;
            $settings->save();
            return redirect()->back();
        }
    }
}
