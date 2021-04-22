<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;

class MasterController extends Controller
{

//////list master show////////
    public function Show_master_page()
    {
        $masters = DB::select('select * from masters');
        $i = 1;
        return view('admin_folder.GererMaster.gerermaster', ['masters' => $masters, 'i' => $i]);
    }
    //////list master show////////
    ///
    ///
    /// Show add master page///////
    public function Show_add_master_page()
    {
        return view('admin_folder.GererMaster.ajouter_master');
    }
    /// Show add master page////////

    ////add master function//////
    public function add_master(Request $request)
    {
        $rules = [
            'master' => 'required | unique:masters,master',
            'type_m' => 'required',
            'detail' => 'required',
        ];

        $messages = [
            'master.required' => 'Ce champ est obligatoire',
            'master.unique' => 'Cet master existe déja',
            'type_m.required' => 'Ce champ est obligatoire',
            'detail.required' => 'Ce champ est obligatoire',


        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

        $m = \request('master');
        $type_m = \request('type_m');
        $detail = \request('detail');

        $master = new Master();
        $master->master = $m;
        $master->type_m = $type_m;
        $master->details = $detail;
        $master->save();
        return redirect()->back()->with(['success' => 'Master ajouter avec succes ']);
    }
    ////add master function//////


////show update master page//////
    public function Show_update_master_page($id_master)
    {

        $master = Master::find($id_master);
        if (!$master)
            return redirect()->back();

        $masters = Master::select('id', 'master', 'type_m', 'details')->find($id_master);
        return view('admin_folder.GererMaster.update_master', ['masters' => $masters]);
    }

//////// end show update master page//////////


    ///////update master///////
    public function update_master(Request $request)
    {
        $rules = [
            'master' => 'required ',
            'type_m' => 'required',
            'detail' => 'required',
        ];

        $messages = [
            'master.required' => 'Ce champ est obligatoire',
            'type_m.required' => 'Ce champ est obligatoire',
            'detail.required' => 'Ce champ est obligatoire',


        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        $id = \request('id');
        $m = \request('master');
        $type_m = \request('type_m');
        $detail = \request('detail');
        $master = Master::find($id);
        $master->master = $m;
        $master->type_m = $type_m;
        $master->details = $detail;
        $master->save();

        return redirect()->back()->with(['success' => 'Master Modifier avec succes ']);
    }
    ////end update master function//////


/////delete master /////
    public function delete_master($id_master)
    {

        $master = Master::find($id_master);
        $master->delete();
        return redirect()->back()->with(['success' => 'Master Supprimer avec succes ']);

    }

/////end delete master /////


    public function Show_master_rech_page()
    {

        $masters = Master::
        where('type_m', 'Recherche')->get();
        return view('FrontEnd.Master_rech', ['masters' => $masters]);
    }


    public function Show_master_pro_page()
    {

        $masters = Master::
        where('type_m', 'Professionnel')->get();
        return view('FrontEnd.Master_pro', ['masters' => $masters]);
    }


}
