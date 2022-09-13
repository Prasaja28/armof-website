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
            'kategori_furniture.nama_kategori_furniture as furniture_name',
            'kategori_fungsi.nama_kategori_fungsi as fungsi_name',
        )

            ->leftjoin('kategori_furniture', 'koleksi.furniture_id', '=', 'kategori_furniture.id')
            ->leftjoin('kategori_fungsi', 'koleksi.fungsi_id', '=', 'kategori_fungsi.id')
            ->get();

        $furnitureKol = DB::table('kategori_furniture')->orderBy('nama_kategori_furniture', 'asc')->get();
        $fungsiKol = DB::table('kategori_fungsi')->orderBy('nama_kategori_fungsi', 'asc')->get();
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
            'link_ar' => $request->link_ar,
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
        if (is_file($image_path)) {
            unlink($image_path);
        }
        $data->delete();
        return redirect('/koleksi-admin');
    }
}
