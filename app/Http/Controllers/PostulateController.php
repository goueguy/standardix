<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;
class PostulateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $offre= Offre::where('slug', $slug)->first();
        return view('frontend.candidats.postulate', compact('offre'));

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
    public function store(Request $request,$slug)
    {
        //dd($request->all());
        $this->validate($request,[
            'name' => 'required|string|min:3',
            'firstname' => 'required|min:3',
            'email' => 'required|email',
            'metiers' => 'required',
            'cv' => 'required|mimes:pdf,PDF',
            'motivation' => 'required|max:255'
        ]);

        $nom = $request->nom;
        $firstname = $request->prenoms;
        $email = $request->email;
        $metiers = $request->metiers;
        $file_cv = $request->file('cv');
        $motivation = $request->motivation;

        //dd($motivation);
        if ($request->hasFile('cv')) {
             //get file with extension
            $fileNameWithExtension = $request->file("cv")->getClientOriginalName();
            //get filename
            $fileName = pathinfo($fileNameWithExtension, PATHINFO_FILENAME);
            //get file extension
            $extension = $request->file("cv")->getClientOriginalExtension();
            //file to store in database
            $fileNameStore = $fileName."_".time().".".$extension;
            //$path = $request->file("file")->store("public/files",$fileNameStore);
            $request->file("cv")->move("cv_uploads", $fileNameStore);

        }else{
            $fileNameStore = "text.pdf";
        }
        $newCandidature = new Candidature;
        $newCandidature->name = $nom;
        $newCandidature->firstname =$firstname;
        $newCandidature->email =$email;
        $newCandidature->metiers =$metiers;
        $newCandidature->cv = $fileNameStore ;
        $newCandidature->motivation = $motivation;
        $newCandidature->save();

        return back()->with('message','Votre candidature a été validée pour cette Offre');


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
