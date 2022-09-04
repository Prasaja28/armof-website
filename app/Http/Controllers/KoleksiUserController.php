<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koleksi;

class KoleksiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koleksi = Koleksi::all();
        return view('users.pages.koleksi', compact('koleksi'));
    }

    public function show($id)
    {
        $detailKoleksi = Koleksi::findOrFail($id); //This will fetch the respective record from the table.
        // dd($detailKoleksi);
        return view('users.pages.detail', compact('detailKoleksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
