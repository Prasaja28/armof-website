<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $profil = Profil::all();
        return view('admin/profil-perusahaan/index', compact('profil'));
    }

    public function store(Request $request)
    {
        Profil::create([
            'deskripsi' => $request->content
        ]);
        return redirect('/admin-profil');
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Profil::where('id', $id)->update([
            'deskripsi' => $request->content
        ]);
        return redirect('/admin-profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profil::where('id', $id)->delete();
        return redirect('/admin-profil');
    }
}
