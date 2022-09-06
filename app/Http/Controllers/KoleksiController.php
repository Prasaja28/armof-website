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
            'Kategori_furniture.id as furniture_id',
        )

            ->leftjoin('Kategori_furniture', 'koleksi.furniture_id', '=', 'Kategori_furniture.id')
            ->leftjoin('Kategori_fungsi', 'koleksi.fungsi_id', '=', 'Kategori_fungsi.id')
            ->get();

        $furnitureKol = DB::table('Kategori_furniture')->orderBy('nama_kategori_furniture', 'asc')->get();
        $fungsiKol = DB::table('Kategori_fungsi')->orderBy('nama_kategori_fungsi', 'asc')->get();
        return view('admin.admin-koleksi.index', compact('koleksi', 'furnitureKol', 'fungsiKol'));
    }

    public function store(Request $request)
    {
        $data = [];
        if ($request->hasfile('foto')) {
            foreach ($request->file('foto') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/img/koleksi-img/', $name);
                $data[] = $name;
            }
        }

        Koleksi::create([
            'nama_koleksi' => $request->nama_koleksi,
            'furniture_id' => $request->furniture_id,
            'fungsi_id' => $request->fungsi_id,
            'foto' => json_encode($data),
            'gender' => $request->gender,
            'age_min' => $request->age_min,
            'age_max' => $request->age_max,
            'link_ar' => $request->link_ar,
            'deskripsi' => $request->deskripsi,
            'height' => $request->height,
            'weight' => $request->weight,
        ]);
        return redirect('/koleksi-admin')->with('Data Berhasil Di Simpan!!!');
    }

    public function update(Request $request, $id)
    {
        $data = [];
        if ($request->hasfile('foto')) {
            foreach ($request->file('foto') as $image) {
                $name = $image->getClientOriginalName();
                $image->move(public_path() . '/img/koleksi-img/', $name);
                $data[] = $name;
            }
        }

        $update = [
            'nama_koleksi' => $request->nama_koleksi,
            'furniture_id' => $request->furniture_id,
            'fungsi_id' => $request->fungsi_id,
            'gender' => $request->gender,
            'age_min' => $request->age_min,
            'age_max' => $request->age_max,
            'deskripsi' => $request->deskripsi,
            'height' => $request->height,
            'weight' => $request->weight,
        ];

        if (sizeof($data) < 1) {
            Koleksi::where('id', $id)
                ->update($update);
        } else {
            $update = array_merge($update, ['foto' => json_encode($data)]);
            Koleksi::where('id', $id)
                ->update($update);
        }

        return redirect('/koleksi-admin')->with('Data Berhasil Di di update!!!');
    }

    public function destroy($id)
    {
        $data = Koleksi::find($id);
        $image_path = public_path() .  $data->foto;
        unlink($image_path);
        $data->delete();
        return redirect('/koleksi-admin');
    }
}
