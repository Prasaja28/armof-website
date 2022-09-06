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
    public function index(Request $request)
    {
        $koleksi = Koleksi::all();
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
}
