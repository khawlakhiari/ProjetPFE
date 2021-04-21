<?php

namespace App\Http\Controllers;
use App\Models\Enseignant;
use App\Models\Master;
use Hash;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Crypt;

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

      $m=\request('master');

        $master = Master::select('id')->where('master',$m)->get()->first();

        $random_password = Str::random(10);
        $password=Crypt:: encryptString($random_password);
        $enseignant=new Enseignant();
        $enseignant->nom=$nom;
        $enseignant->prenom=$prenom;
        $enseignant->email=$email;
        $enseignant->telephone=$telephone;
        $enseignant->password=$password;
        $enseignant->master_id=$master->id;
        $enseignant->save();

$p=Crypt:: decryptString($enseignant->password);
        $request ->session()->put('master',$m);
        $request ->session()->put('password',$p);
        $request ->session()->put('enseignant',$enseignant->email);
        Mail::send('admin_folder.Gerer_membre_jury.Send_mail_admin', ['email' => $enseignant->email], function ($message) use ($request, $enseignant) {
            $message->to($enseignant->email)
                ->from('isgs@isgs.rnu.tn')
                ->subject('Demande  réinitialisation de mot de passe');
            //mail section

        });

        return redirect()->back()->with(['success'=>'Enseignant ajouter avec succes ']);



    }
    //////end ADD MJ/////



    public function delete_enseignant($id_e) {

        $master=Enseignant::find($id_e);
        $master->delete();

        return redirect()->back()->with(['success'=>'Ensignant Supprimer avec succes ']);

    }
}
