<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Kategori_furniture;
use App\Models\Kategori_fungsi;
use App\Models\Koleksi;

class FrontController extends Controller
{
    public function pageFurniture()
    {
        $furnitures = Kategori_furniture::get();

        return view('users.pages.furnitures', ['furnitures' => $furnitures]);
    }

    public function pageFungsi(Request $request, $furnitureId)
    {
        $fungsi = Kategori_fungsi::where('furniture_id', $furnitureId)->get();
        $request->session()->put('furniture_id', $furnitureId);

        return view('users.pages.fungsi', ['fungsi' => $fungsi]);
    }

    public function pageUsia(Request $request, $fungsiId)
    {
        $request->session()->put('fungsi_id', $fungsiId);

        return view('users.pages.usia');
    }

    public function pageTinggiBerat(Request $request)
    {
        $gender = $request->get('gender');
        $usia = $request->get('usia');

        $request->session()->put('gender', $gender);
        $request->session()->put('usia', $usia);

        return view('users.pages.tinggi-berat');
    }

    public function pageRekomendasi(Request $request)
    {
        $kondisi = [
            'furnitureId'   => $request->session()->get('furniture_id', null),
            'fungsiId'      => $request->session()->get('fungsi_id', null),
            'gender'        => $request->session()->get('gender', null),
            'usia'          => $request->session()->get('usia', null),
            'tinggi'        => $request->get('tinggi'),
            'berat'         => $request->get('berat'),
        ];

        $koleksi = Koleksi::where(function ($query) use ($kondisi) {
            $query->where('furniture_id', '=',  $kondisi['furnitureId'])
                ->where('fungsi_id', '=', $kondisi['fungsiId'])
                ->where('gender', '=', $kondisi['gender'])
                ->where('age_min', '<=', $kondisi['usia'])
                ->where('age_max', '>=', $kondisi['usia'])
                ->where('height', '=', $kondisi['tinggi'])
                ->where('weight', '=', $kondisi['berat']);
        })
            ->get();
        return view('users.pages.rekomendasi', ['result' => $koleksi]);
    }
}
