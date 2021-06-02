<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view("frontend.inscription");
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
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'firstname' => 'required|string|min:3',
            'email' => 'required|email|unique:inscriptions',
            'metiers' => 'required|integer',
            'cv' => 'required|mimes:pdf,PDF|max:2048',
            'motivation' => 'required|string|min:10|max:255'
        ],[
            'name.required' => 'Le nom est requis',
            'firstname.required' => 'Le prénom est requis',
            'email.required' => 'Adresse email requise',
            'metiers.required' => 'Le metier est requis',
            'cv.file' => 'Le fichier doit être au format .pdf',
            'cv.required' => 'Votre CV est requis',
            'motivation.required' => 'Votre motivation est requise'
        ]);


        $nom = $request->name;
        $firstname = $request->firstname;
        $email = $request->email;
        $metiers = $request->metiers;
        $file_cv = $request->file('cv');
        $motivation = $request->motivation;

        if ($request->hasFile('cv')) {
            $path = $request->cv->path();
            $extension = $request->cv->extension();

            $newFile= time()."_".$file_cv->getClientOriginalName();

           $request->file('cv')->move('cv_uploads', $newFile);
        }
        


        dd($newFile);
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
    public function edit($id)
    {
        //
    }

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
