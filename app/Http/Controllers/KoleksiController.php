<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koleksi;
use Illuminate\Support\Facades\DB;

class KoleksiController extends Controller
{

    public function index()
    {
        $koleksi = Koleksi::select(
            'koleksi.*',
            'Kategori_furniture.nama_kategori_furniture as furniture_name',
            'Kategori_fungsi.nama_kategori_fungsi as fungsi_name',
        )
            ->leftjoin('Kategori_furniture', 'koleksi.furniture_id', '=', 'Kategori_furniture.id')
            ->leftjoin('Kategori_fungsi', 'koleksi.fungsi_id', '=', 'Kategori_fungsi.id')
            ->paginate();

        $furnitureKol = DB::table('Kategori_furniture')->orderBy('nama_kategori_furniture', 'asc')->get();
        $fungsiKol = DB::table('Kategori_fungsi')->orderBy('nama_kategori_fungsi', 'asc')->get();
        return view('admin.admin-koleksi.index', compact('koleksi', 'furnitureKol', 'fungsiKol'));
    }

    public function store(Request $request)
    {
        $path = null;
        if ($request->foto) {
            $file = $request->file('foto');
            $path = '/img/koleksi-img/' . time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('img/koleksi-img'), $path);
        }

        Koleksi::create([
            'nama_koleksi' => $request->nama_koleksi,
            'furniture_id' => $request->furniture_id,
            'fungsi_id' => $request->fungsi_id,
            'foto' => $path,
            'gender' => $request->gender,
            'age_min' => $request->age_min,
            'age_max' => $request->age_max,
            'height' => $request->height,
            'weight' => $request->weight,
        ]);
        return redirect('/koleksi-admin')->with('Data Berhasil Di Simpan!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
