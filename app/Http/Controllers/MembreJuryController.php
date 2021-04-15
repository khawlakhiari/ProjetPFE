<?php

namespace App\Http\Controllers;
use App\Models\Enseignant;
use App\Models\Master;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembreJuryController extends Controller
{//Show MJ page///

    public function Show_MJ_page()
    { $enseignants= DB:: table('masters')

        ->join('enseignants','masters.id','=','enseignants.master_id')
        ->select('masters.master','masters.type_m','enseignants.nom','enseignants.prenom','enseignants.email','enseignants.telephone','enseignants.id')

        ->get();
        $i=1;
        return view('admin_folder.Gerer_membre_jury.GererMJ',['enseignants'=>$enseignants,'i'=>$i]);
    }
    //////end Show MJ page////////



//Show add MJ page///
    public function Show_add_MJ_page()
    { $masters = DB::select('select *  from masters');
        return view('admin_folder.Gerer_membre_jury.Ajouter_MJ',['masters'=>$masters]);
    }
//end Show  add MJ page///

   //////ADD MJ/////
    public function add_MJ(Request $request)
    {
        $rules=    [
            'nom' => 'required ',
            'prenom' => 'required',
            'email' => 'required |  unique:enseignants,email',
            'telephone' => 'required | unique:enseignants,telephone',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required',

        ];
         $messages=       [
             'nom.required' =>'Ce champ est obligatoire',
             'email.unique'=>'Le email doit etre unique',
             'telephone.unique'=>'Le numero de telephone doit etre unique',
             'prenom.required' =>'Ce champ est obligatoire',
             'telephone.required' =>'Ce champ est obligatoire',

             'password.required' =>'Ce champ est obligatoire',
             'password.min' =>'Pour des raison de securité le longeur de la mot de passe doit etre superieur a 8',
             'password.confirmed' =>'mots de passe ne correspond pas',

             'password_confirmation.required' =>'Ce champ est obligatoire',
         ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $nom=\request('nom');

         $prenom=\request('prenom');
      $telephone=\request('telephone');
       $email=\request('email');
         $password=\request('password');
      $m=\request('master');

        $master = Master::select('id')->where('master',$m)->get()->first();


       $enseignant=new Enseignant();
        $enseignant->nom=$nom;
        $enseignant->prenom=$prenom;
        $enseignant->email=$email;
        $enseignant->telephone=$telephone;
        $enseignant->password=bcrypt($password);
        $enseignant->master_id=$master->id;
        $enseignant->save();
        return redirect()->back()->with(['success'=>'Enseignant ajouter avec succes ']);    }
    //////end ADD MJ/////
    ////show update master page//////
    public function Show_update_MJ_page($id_e)
    {
        $masters = DB::select('select *  from masters');
        $enseignant= Enseignant::find($id_e);
        if(!$enseignant)
            return redirect()->back();

        $enseignants= DB:: table('masters')

            ->join('enseignants','masters.id','=','enseignants.master_id')
            ->select('masters.master','masters.type_m','enseignants.nom','enseignants.prenom','enseignants.email','enseignants.telephone','enseignants.id')
            ->where('enseignants.id',$id_e)
            ->first();

        return view('admin_folder.Gerer_membre_jury.Modifier_enseignant',['enseignants'=>$enseignants,'masters'=>$masters]);
    }

    public function update_enseignant(Request $request) {
        $rules=    [
            'nom' => 'required ',
            'prenom' => 'required',
            'email' => 'required |  unique:enseignants,email',
            'telephone' => 'required | unique:enseignants,telephone',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required',

        ];
        $messages=       [
            'nom.required' =>'Ce champ est obligatoire',
            'email.unique'=>'Le email doit etre unique',
            'telephone.unique'=>'Le numero de telephone doit etre unique',
            'prenom.required' =>'Ce champ est obligatoire',
            'telephone.required' =>'Ce champ est obligatoire',


        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
$nom=\request('nom');
        $prenom=\request('prenom');
        $telephone=\request('telephone');
        $email=\request('email');
        $password=\request('password');
        $m=\request('master');

        $master = Master::select('id')->where('master',$m)->get()->first();
        $enseignant=new Enseignant();
        $enseignant->nom=$nom;
        $enseignant->prenom=$prenom;
        $enseignant->email=$email;
        $enseignant->telephone=$telephone;
        $enseignant->password=bcrypt($password);
        $enseignant->master_id=$master->id;
        $enseignant->save();
        return redirect()->back()->with(['success'=>'Enseignant modifier avec succes ']);

    }
}
