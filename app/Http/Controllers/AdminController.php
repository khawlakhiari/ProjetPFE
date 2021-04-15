<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;


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
    {   $email = $request->input('email');
        $password = $request->input('password');

        $admin= Admin::where('email',$email)->get()->first();
if ($admin == null){
    Session::flash('error', "Votre email est incorrecte ");
  return redirect('/admin_login');

}

else{

        if ( $admin->password == $password)
        {
            $request ->session()->put('admin',$admin->email);

            return redirect('/profile_admin');
        }
        else
        {
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









}
