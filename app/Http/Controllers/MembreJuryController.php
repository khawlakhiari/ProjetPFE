<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MembreJuryController extends Controller
{//Show MJ page///
    public function Show_MJ_page()
    {
        return view('admin_folder.Gerer_membre_jury.GererMJ');
    }
//end Show MJ page///


//Show add MJ page///
    public function Show_add_MJ_page()
    { $masters = DB::select('select *  from masters');
        return view('admin_folder.Gerer_membre_jury.Ajouter_MJ',['masters'=>$masters]);
    }
//end Show  add MJ page///

   //////ADD MJ/////
    public function add_MJ()
    {

    }
    //////end ADD MJ/////
}
