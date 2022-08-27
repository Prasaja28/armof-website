<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::all();
        return view('admin/akun-admin/index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:50',
            'email' => 'required|string|min:8|max:50|unique:users',
            'password' => 'required|string|confirmed|min:8'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => 1
        ]);
        return redirect('/users-admin')->with('status', 'Data Berhasil Ditambahkan!!!');
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->get();
        if ($user[0]->email == $request->email) {
            $request->validate([
                'name' => 'required|string|min:3|max:50',
                'email' => 'required|string|min:8|max:50',
                'password' => 'required|string|confirmed|min:8'
            ]);
        } else {
            $request->validate([
                'name' => 'required|string|min:3|max:50',
                'email' => 'required|string|min:8|unique:users|max:50',
                'password' => 'required|string|confirmed|min:8'
            ]);
        }
        $user = User::where('id', $id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'roles_id' => $request->role,
                'password' => bcrypt($request->password),
                'status' => $request->status
            ]);
        return redirect('/users-admin')->with('status', 'Data Berhasil Di Update!!!');
    }

    public function destroy($id)
    {
        User::where('id', $id)
            ->update([
                'status' => 0
            ]);
        return redirect('/users-admin')->with('status', 'Data Berhasil Di Hapus!!!');
    }
}
