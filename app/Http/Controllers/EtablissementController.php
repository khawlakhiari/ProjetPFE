<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;


use App\Models\Universite;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class EtablissementController extends Controller
{
    //////Show Liste etablissement page///////////
    public function Show_Etablissement_page()
    {$etalissement = DB::select('select * from etablissements');
        $i=1;
        return view('admin_folder.Gerer_etablissement.Gerer_Etablissement',['etablissement'=>$etalissement,'i'=>$i]);

    }
//////Show Liste etablissement page////////////

    //////Show add etalissement  page///////////

    public function Show_Add_etablissement_page()
    {
        $universites =DB::select('select universite from universites');

        return view('admin_folder.Gerer_etablissement.Ajouter_etablissemnt',['universites'=>$universites]);

    }
    //////Show add etalissement  page///////////


    public function add_etablissement(Request $request)
 {
 $rules=    [
        'etablissement' => 'required | unique:etablissements,etablissement',

    ];
        $messages=       [
            'etablissement.required' =>'Ce champ est obligatoire',
            'etablissement.unique'=>'Ce etablissement existe déja',
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

        $e=\request('etablissement');

        $u=\request('universite');
        $id_univ=Universite::select('id')->where('universite',$u)->get()->first();

        $etablissement=new Etablissement();
        $etablissement->etablissement=$e;
        $etablissement->id_univ=$id_univ->id;
        $etablissement->save();
        return redirect()->back()->with(['success'=>'Etablissement ajouter avec succes ']);




    }
}
