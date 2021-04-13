<?php

namespace App\Http\Controllers;

use App\Models\dossiers;
use App\Models\Etudiant;
use Illuminate\Http\Request;
use Auth;

class DossierController extends Controller
{
    public function Show_baccalauriat_page($id)
    {
$etudiant=Etudiant::find($id);
$ds=$etudiant->dossier;
dd($ds);
        return view('viewetudiant.baccalauriat');

    }

    public function  insertdossier(Request $request){
        $dossier=new dossiers();
        $Etudiant = Auth::user();
        $dossier->anne_bac = $request->get('anne_bac');
        $dossier->bac = $request->get('bac');
        $dossier->reoriente = $request->get('reoriente');
        $dossier->imgbac = 'jdhs';
        $dossier->img_etud = 'jdhs';
        dd($dossier);
        $Etudiant-> dossiers() ->save($dossier);


        return'dossier cree';



    }

}
