<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{/////function that show you home page////
    public function Show_home_page() {
        return view('FrontEnd.home');
    }
 /////function that show you home page////

 ///////function that show you the register and login page////
 public function registeretlogin(){
    return view('FrontEnd.registeretlogin');
}
///////function that show you the register and login page////



}
