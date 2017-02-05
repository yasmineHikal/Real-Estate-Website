<?php

namespace App\Http\Controllers;

use App\siteSetting;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class siteSettingController extends Controller
{
    //

    public function index(siteSetting $siteSetting){

        $siteSetting =$siteSetting->all();
        return view('admin.siteSetting.index' ,compact('siteSetting'));


    }

    public function store(Request $request ,siteSetting $siteSetting){

        foreach(array_except($request->toArray(),['_token','submit']) as $key=>$req){


            $siteSettingUpdate=$siteSetting->where('nameSiteSetting', $key )->get()[0];
            $siteSettingUpdate->fill([ 'value' => $req])-> save();
        }

        return  Redirect::back()->withFlashMessage('the setting is updated');

    }
}
