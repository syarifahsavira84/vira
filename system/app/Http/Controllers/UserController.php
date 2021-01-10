<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list_user'] = User::withCount('produk')->get();
        return view('user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('user.create');
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {

       // $validated = request()->validate([
       //  'nama' => ['required'],
       //  'username' => ['required'],
       //  'email' => ['required']
       // ]);

        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = request('password');
        $user->jenis_kelamin = 1;
        $user->save();

        $userDetail = new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();

        return redirect('admin/user')->with('success', 'Data berhasil ditambah');
    }
    function show(User $user){
        $data['user'] = $user;
        return view('user.show', $data);
    }
    function edit(User $user){
        $data['user'] = $user;
        return view('user.edit', $data);
    }
    function update(User $user){
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        if(request('password')) $user->password = request('password');

        $user->save();

        return redirect('admin/user')->with('success', 'Data berhasil diedit');
    }
    function destroy(User $user){
        $user->delete();

        return redirect('admin/user')->with('danger', 'Data berhasil dihapus');
    }
    function filter(){
        $nama = request('nama');
        $data['list_user'] = User::where('nama', 'like', "%$nama%")->get();
        $data['nama'] = $nama;
        return view('user.index', $data);   
    }
}
