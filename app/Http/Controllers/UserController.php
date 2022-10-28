<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index(){
        $users = User::latest()->paginate(15);
        return view('back.users', compact('users'));
    }

    public function makeAdmin($id){
        DB::table('users')->where('id', $id)->update(['role'=>1]);
        Alert('Admin mode', 'User now has Admin priviledges', 'success');
        return back();
    }

    public function removeAdmin($id){
        DB::table('users')->where('id', $id)->update(['role'=>0]);
        Alert('User mode', 'User now has no Admin priviledges', 'error');
        return back();
    }
}
