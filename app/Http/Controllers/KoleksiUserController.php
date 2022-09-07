<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Koleksi;
use Illuminate\Support\Facades\DB;
use PDF;

class KoleksiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
        $kol = Koleksi::query();
        if (request('search')) {
            $kol->where('nama_koleksi', 'Like', '%' . request('search') . '%');
        }
        return view('users.pages.koleksi', compact('koleksi', 'kol'));
    }

    public function show($id)
    {
        $detailKoleksi = Koleksi::findOrFail($id);
        return view('users.pages.detail', compact('detailKoleksi'));
    }

    public function search(Request $request)
    {
        $keyword = $request->get('q');
        $koleksi = Koleksi::from('koleksi as k')
            ->select('k.*', 'k.nama_koleksi as nama_koleksi')
            ->where('k.nama_koleksi', 'like', '%' . $keyword . '%')
            ->get();
        if ($koleksi->count() == 0) {
            return view('users.pages.koleksi-not-found');
        }

        return view('users.pages.koleksi', compact('koleksi', 'keyword'));
    }

    public function downloadPDF($id)
    {
        $detailKoleksi = Koleksi::Where('id', $id)->first()->toArray();
        $pdf = PDF::loadView('users.pages.pdfKoleksi', $detailKoleksi);

        return $pdf->download($detailKoleksi['nama_koleksi'] . '.pdf');
    }
}
