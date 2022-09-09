<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori_furniture;
use App\Models\Kategori_fungsi;
use Illuminate\Support\Facades\DB;

class KategoriAdminController extends Controller
{
    public function indexFurniture()
    {
        $furniture = Kategori_furniture::all();
        return view('admin.admin-kategori-furniture.index', compact('furniture'));
    }

    public function indexFungsi()
    {
        $fungsi = Kategori_fungsi::select(
            'kategori_fungsi.*',
            'kategori_furniture.nama_kategori_furniture as furniture_name',
        )

            ->leftjoin('kategori_furniture', 'kategori_fungsi.furniture_id', '=', 'kategori_furniture.id')
            ->get();

        $furnit = DB::table('kategori_furniture')->orderBy('nama_kategori_furniture', 'asc')->get();
        return view('admin.admin-kategori-fungsi.index', compact('fungsi', 'furnit'));
    }

    public function storeFurniture(Request $request)
    {
        $path = null;
        if ($request->foto) {
            $file = $request->file('foto');
            $path = __DIR__ . '/img/kategori-furniture-img/' . time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('img/kategori-furniture-img'), $path);
        }

        Kategori_furniture::create([
            'nama_kategori_furniture' => $request->nama_kategori_furniture,
            'foto' => $path,
        ]);
        return redirect('/kategori-furniture')->with('Data Berhasil Di Simpan!!!');
    }

    public function storeFungsi(Request $request)
    {
        $path = null;
        if ($request->foto) {
            $file = $request->file('foto');
            $path = '/img/kategori-fungsi-img/' . time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('img/kategori-fungsi-img'), $path);
        }

        Kategori_fungsi::create([
            'nama_kategori_fungsi' => $request->nama_kategori_fungsi,
            'furniture_id' => $request->furniture_id,
            'foto' => $path,
        ]);
        return redirect('/kategori-fungsi')->with('Data Berhasil Di Simpan!!!');
    }

    public function updateFurniture(Request $request, $id)
    {
        $path = null;
        if ($request->foto) {
            $file = $request->file('foto');
            $path = '/img/kategori-furniture-img/' . time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('/img/kategori-furniture-img/'), $path);
        } else {
            $path = $request->foto2;
        }
        Kategori_furniture::where('id', $id)
            ->update([
                'nama_kategori_furniture' => $request->nama_kategori_furniture,
                'foto' => $path,
            ]);
        return redirect('/kategori-furniture')->with('Data Berhasil Di Simpan!!!');
    }

    public function updateFungsi(Request $request, $id)
    {
        $path = null;
        if ($request->foto) {
            $file = $request->file('foto');
            $path = '/img/kategori-fungsi-img/' . time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('/img/kategori-fungsi-img/'), $path);
        } else {
            $path = $request->foto2;
        }
        Kategori_fungsi::where('id', $id)
            ->update([
                'nama_kategori_fungsi' => $request->nama_kategori_fungsi,
                'furniture_id' => $request->furniture_id,
                'foto' => $path,
            ]);
        return redirect('/kategori-fungsi')->with('Data Berhasil Di Simpan!!!');
    }

    public function destroyFurniture($id)
    {
        $data = Kategori_furniture::find($id);
        $image_path = public_path() .  $data->foto;
        unlink($image_path);
        $data->delete();
        return redirect('/kategori-furniture');
    }

    public function destroyFungsi($id)
    {
        $data = Kategori_fungsi::find($id);
        $image_path = public_path() .  $data->foto;
        unlink($image_path);
        $data->delete();
        return redirect('/kategori-fungsi');
    }
}
