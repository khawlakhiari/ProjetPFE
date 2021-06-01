<?php

namespace App\Http\Controllers;

use App\Models\dossiers;
use App\Models\Etablissement;
use App\Models\Etudiant;
use App\Models\Universite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\Validator;

class EtudiantController extends Controller
{

//////Show register page///////////
    public function Show_register_page()
    { $master= DB:: ta
        return view('viewetudiant.register');
    }
//////Show register page////////////


////traitement de page register//////
    public function register(Request $request)
    {
        $rules=    [
            'nom' => ['required'],
            'prenom' => ['required'],
            'telephone' => ['required'],
            'cin' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ];
$messages=       [
     'password.min' => 'Pour des raisons de sécurité,votre mot de passe doit faire :min caractères.',
     'password.required'=>'ce champ est obligatoire',
     'nom.required'=>'ce champ est obligatoire',
     'prenom.required'=>'ce champ est obligatoire',
     'telephone.required'=>'ce champ est obligatoire',
     'cin.required'=>'ce champ est obligatoire',
     'email.required'=>'ce champ est obligatoire',
    'password_confirmation.required'=>'ce champ est obligatoire',
    'password.confirmed'=>'La mot de passe de confirmation ne correspond pas',

];
        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $email=\request('email');
        $password=\request('password');
        $cin=\request('cin');
        $telephone=\request('telephone');
        $nom=\request('nom');
        $prenom=\request('prenom');
        $type_m=\request('type_m');
        $encrypted_password=Crypt:: encryptString($password);
$type_ma=DB::table('masters')
        ->join('etudiants','masters.id','=','etudiants.master_id')
        ->select('etudiants.cin')
        ->where('etudiants.cin',$cin)
        ->get();
        $etudiant=new Etudiant();
        $etudiant->email=$email;
        $etudiant->password=$encrypted_password;
        $etudiant->cin=$cin;
        $etudiant->telephone=$telephone;
        $etudiant->nom=$nom;
        $etudiant->prenom=$prenom;
        $etudiant->save();







//
//        $Etudiant = Etudiant::where('email', request('email'))->first();
//
//        if ($Etudiant == null) {
//
//            Etudiant::create([
//                'email' => request('email'),
//                'nom' => request('nom'),
//                'prenom' => request('prenom'),
//                'cin' => request('cin'),
//                'telephone' => request('telephone'),
//                'password' => bcrypt(request('password')),
//
//            ]);
//
//
//
//        } else {
//            Session::flash('error', "Vous etes déja inscrit ! ");
//            return redirect('/register');
//        }
//
//        $Etudiant = Etudiant::where('email', '=', request('email'))
//            ->get()->first();
//        if (!$Etudiant == null) {
//
//            Mail::send('viewetudiant.confirm_register_email', ['email' => $Etudiant->email], function ($message) use ($request, $Etudiant) {
//                $message->to($Etudiant->email)
//                    ->from('isgs@isgs.rnu.tn')
//                    ->subject('Confirm Account');
//                //mail section
//            });
//            Session::flash('success', "Nous avons vous envoyé un e-mail de confirmation d'inscription");
//            return redirect('/register');
//
//        }
    }
////traitement de page register//////


//////Show login page///////////
    public function Show_login_page()
    {
        return view('viewetudiant.login');
    }
//////Show login page////////////


///////traitement de page login
    public function login()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);
        if ($resultat) {
            return back()->withInput()->withErrors([
                'email' => 'Vos identifiants sont incorrects',
            ]);
        } else  return redirect('/profile');


    }
///////traitement de page login


//////Show register page///////////
    public function Show_resetpassword_page()
    {
        return view('viewetudiant.resetpassword');
    }
//////Show register page////////////


/////send mail traitment when you demande to change password////
    public function reset_password(Request $request)
    {

        request()->validate([
            'email' => ['required', 'email'],
        ]);
        //mail section
        $Etudiant = Etudiant::where('email', '=', request('email'))
            ->get()->first();

        if ($Etudiant==null)
        {
            return redirect('/resetpassword')->withErrors([
                'email'=> "Vous devez etre connecter pour avoir cette page"
            ]);

        }

           Mail::send('viewetudiant.Send_mail', ['email' => $Etudiant->email], function ($message) use ($request, $Etudiant) {
            $message->to($Etudiant->email)
                ->from('isgs@isgs.rnu.tn')
                ->subject('Demande  réinitialisation de mot de passe');
            //mail section

        });

        Session::flash('success', "nous avons envoyé votre lien de réinitialisation de mot de passe par e-mail");
        return redirect('/resetpassword');

    }
    /////send mail treatment when you demand to change password////


//////Show new password page///////////
    public function Show_new_password_page()
    {
        return view('viewetudiant.newpassword');
    }
//////end Show new password page///////////


///////traitement de page new password///
    public function changermotdepasse(Request $request)
    {
        $Etudiant = Etudiant::where('email', '=', request('email'))
            ->get()->first();

        request()->validate([
            'email' => ['required'],
            'password' => ['required','min:8'],
        ]);

        $Etudiant->email = $request->get('email');
        $Etudiant->password = bcrypt($request->get('password'));


        $Etudiant->save();
        Session::flash('success', "Votre Mot de passe a ete changer correctement ");
        return redirect('/login');

    }




/////// end treatment page new password///


//////Show profile page///////////
    public function Show_profile_page()
    {
        if(auth()->guest())
        {
            return redirect('/login')->withErrors([
               'email'=> "Vous devez etre connecter pour avoir cette page"
            ]);
        }
        return view('viewetudiant.profile', ['etudiant' => Auth::user()]);

    }
//////end Show profil page///////////


////traitement de page profile la ou l'etudiant vas s'inscrire////
    public function editProfile(Request $request)
    {
        $Etudiant = Auth::user();

        request()->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'telephone' => ['required'],
            'email' => 'required|email',
            'cin' => 'required',
//            'sexe' => 'required',
            'date_nais' => 'required',
            'lieu' => ['required'],
            'master' => ['required'],
            'ville' => ['required'],
            'codepostal' => ['required'],

        ]);

        /**
         *ToDo if users is saved in the session we can get the user from it or with mail if it's unique
         */

        $Etudiant->prenom = $request->get('prenom');
        $Etudiant->nom = $request->get('nom');
        $Etudiant->cin = $request->get('cin');
        $Etudiant->email = $request->get('email');
        $Etudiant->sexe = $request->get('sexe');
        $Etudiant->date_nais = $request->get('date_nais');
        $Etudiant->lieu = $request->get('lieu');

        $Etudiant->master = $request->get('master');
        $Etudiant->ville = $request->get('ville');
        $Etudiant->codepostal = $request->get('codepostal');
        $Etudiant->profession = $request->get('profession');
        $Etudiant->societe = $request->get('societe');
        $Etudiant->adresse = $request->get('adresse');
        $request->session()->put('user', $Etudiant);
        $Etudiant->save();

        Session::flash('success', "Done ");
        return redirect('/profile');

    }
////end traitement de page profile la ou l'etudiant vas s'inscrire////

    public function Show_profile2_page(Request $request)

    {$univ= Universite::all();

        return view('viewetudiant.suivant1')->with('univ',$univ);
    }



    public function Show_diplome_page  ()
    {
        return view('viewetudiant.diplome');
    }

}
