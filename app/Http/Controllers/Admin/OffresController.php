<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategorieOffre;
use App\Models\User;
use Illuminate\Http\Request;

class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.offres.list-offres');
    }
    /**
     * View offers details
     *
     * @return void
     */
    public function view()
    {
        $categories = CategorieOffre::all();
        $users = User::all();
        return view('admin.offres.view-offres',compact("categories","users"));
    }
    public function lancees()
    {
        $categories = CategorieOffre::all();
        $users = User::all();
        return view('admin.offres.list-offres-lancees',compact("categories","users"));
    }
    public function edit()
    {
        $categories = CategorieOffre::all();
        $users = User::all();
        return view('admin.offres.edit-offres',compact("categories","users"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $categories = CategorieOffre::all();
        $users = User::all();
        return view('admin.offres.create-offres',compact("categories","users"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
