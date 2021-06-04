<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.list-users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('admin.users.create-users');
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
