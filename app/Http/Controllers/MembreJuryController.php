<?php

namespace App\Http\Controllers;
use App\Models\Membre_jury;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function add_MJ(Request $request)
//     $dta=Membre_jury::find(1)->getMembrejury;
//     dd($dta);
{
        $rules=    [
            'nom' => 'required ',
            'prenom' => 'required',
            'email' => 'required |  unique:membres_jury,email',
            'telephone' => 'required | unique:membres_jury,telephone',
            'password' => 'required | min:8| confirmed',
            'password_corfirmation' => 'required',
            'master' => 'required',
        ];
         $messages=       [
             'nom.required' =>'Ce champ est obligatoire',
             'email.unique'=>'Le email doit etre unique',
             'telephone.unique'=>'Le numero de telephone doit etre unique',
             'prenom.required' =>'Ce champ est obligatoire',
             'telephone.required' =>'Ce champ est obligatoire',
             'master.required' =>'Ce champ est obligatoire',
             'password.required' =>'Ce champ est obligatoire',
             'password.min' =>'Pour des raison de securité le longeur de la mot de passe doit etre superieur a 8',
             'password.confirmed' =>'mots de passe ne correspond pas',


         ];
         $validator = Validator::make($request->all(),$rules,$messages);
         if($validator->fails()){
    return redirect()->back()->withErrors($validator)->withInputs($request->all());
}
         $nom=\request('nom');
         $prenom=\request('prenom');
//         $telephone=\request('telephone');
//         $email=\request('email');
         $password=\request('password');

         $master=new Master();

         $master->save();
    }
    //////end ADD MJ/////
}
