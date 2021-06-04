<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $query = DB::table('users')->where('niveau_acces');
        $users = User::all();
        // foreach ($users->roles as $user) {
        //     dd($user->roles);
        // }
        return view('admin.users.list-users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $users = User::all();
        return view('admin.users.create-users',compact("users"));
    }
    public function edit()
    {
        return view('admin.users.edit-users');
    }
    public function view()
    {
        return view('admin.users.view-users');
    }

    public function list()
    {
        return view("admin.candidatures.list");
    }
}
