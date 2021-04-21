<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    ////show login page////
    public function Show_login_admin_page()
    {
        return view('admin_folder.login_admin');
    }
    ////show login page////

///////traitement de page login
    public function login_admin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $admin = Admin::where('email', $email)->get()->first();
        if ($admin == null) {
            Session::flash('error', "Votre email est incorrecte ");
            return redirect('/admin_login');

        } else {

            if ($admin->password == $password) {
                $request->session()->put('admin', $admin->email);

                return redirect('/profile_admin');
            } else {
                Session::flash('error', "Votre mot de passe est incorrecte ");
                return redirect('/admin_login');
            }
        }
    }
///////traitement de page login

    ////show login page////
    public function Show_profile_admin_page()
    {
        return view('admin_folder.profile_admin');
    }

    ////show login page////

// hadha f wost profile
    public function show_changer_mot_passe()
    {
        return view('admin_folder.changer_mot_passe');
    }
    public function trait_changer_mot_passe(Request $request)
    {
        $admin = Admin::where('email', '=', request('email'))
            ->get()->first();

        request()->validate([
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        $admin->email = $request->get('email');
        $admin->password = $request->get('password');


        $admin->save();
        Session::flash('success', "Votre Mot de passe a ete changer correctement ");
        return redirect('/master_page');
    }
// hadha f wost profile

    public function show_mot_passe_oublier()
    {
        return view('admin_folder.mot_passe_oublier');
    }
// hadha f login
    public function trait_mot_passe_oublier(Request $request)
    {

        request()->validate([
            'email' => ['required', 'email'],
        ]);
        //mail section
        $admin = Admin::where('email', '=', request('email'))
            ->get()->first();

        if ($admin==null)
        {
            return redirect('/mot_passe_oublier')->withErrors([
                'email'=> "Vous devez etre connecter pour avoir cette page"
            ]);

        }

        Mail::send('admin_folder.sendmail_admin', ['email' => $admin->email], function ($message) use ($request, $admin) {
            $message->to($admin->email)
                ->from('isgs@isgs.rnu.tn')
                ->subject('Demande  réinitialisation de mot de passe');
            //mail section

        });

        Session::flash('success', "nous avons envoyé votre lien de réinitialisation de mot de passe par e-mail");
        return redirect('/mot_passe_oublier');
    }
    // hadha f login


    public function show_changer_mot_passe_mail()
    {
        return view('admin_folder.changer_mot_passe_mail');
    }

    public function trait_changer_mot_passe_mail(Request $request)
    {
        $admin = Admin::where('email', '=', request('email'))
            ->get()->first();

        request()->validate([
            'email' => ['required'],
            'password' => ['required', 'min:8'],
        ]);

        $admin->email = $request->get('email');
        $admin->password = $request->get('password');


        $admin->save();
        Session::flash('success', "Votre Mot de passe a ete changer correctement ");
        return redirect('/admin_login');
    }

}
