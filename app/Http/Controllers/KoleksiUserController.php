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

    // public function getKoleksi(Request $request)
    // {
    //     $draw = $request->get('draw');
    //     $start = $request->get("start");
    //     $rowperpage = $request->get("length"); // total number of rows per page

    //     $columnIndex_arr = $request->get('order');
    //     $columnName_arr = $request->get('columns');
    //     $order_arr = $request->get('order');
    //     $search_arr = $request->get('search');

    //     $columnIndex = $columnIndex_arr[0]['column']; // Column index
    //     $columnName = $columnName_arr[$columnIndex]['data']; // Column name
    //     $columnSortOrder = $order_arr[0]['dir']; // asc or desc
    //     $searchValue = $search_arr['value']; // Search value

    //     // Total records
    //     $totalRecords = Koleksi::select('count(*) as allcount')->count();
    //     $totalRecordswithFilter = Koleksi::select('count(*) as allcount')->where('nama_koleksi', 'like', '%' . $searchValue . '%')->count();

    //     // Get records, also we have included search filter as well
    //     $records = Koleksi::orderBy($columnName, $columnSortOrder)
    //         ->where('oultet.nama_koleksi', 'like', '%' . $searchValue . '%')
    //         ->select('koleksi.*')
    //         ->skip($start)
    //         ->take($rowperpage)
    //         ->get();

    //     $data_arr = array();

    //     foreach ($records as $record) {

    //         $data_arr[] = array(
    //             "id" => $record->id,
    //             "nama_koleksi" => $record->nama_koleksi,
    //         );
    //     }

    //     $response = array(
    //         "draw" => intval($draw),
    //         "iTotalRecords" => $totalRecords,
    //         "iTotalDisplayRecords" => $totalRecordswithFilter,
    //         "aaData" => $data_arr,
    //     );

    //     echo json_encode($response);
    // }

    // public function search(Request $request)
    // {
    //     $keyword = $request->keyword;
    //     $koleksi = Koleksi::from('koleksi as k')
    //         ->select('k.*', 'k.nama_koleksi as nama_koleksi')
    //         ->where('k.nama_koleksi', 'like', '%' . $keyword . '%')
    //         ->get();
    //     if ($koleksi->count() == 0) {
    //         return view('/koleksi-not-found');
    //     }

    //     return view('koleksi', compact('koleksi', 'keyword'));
    // }
}
