<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Datatables;
use User;
use App\Bu;

class BuController extends Controller
{

    /**
     * return index page of all real estate
     */
    public function index(Bu $bu)
    {
        $bu =$bu->all();
        return view('admin.bu.index', compact('bu'));

    }

    /**
     * return view of adding new real state
     */
    public function create(){

        return view('admin.bu.add');

    }

    /**
     * @param $id
     * @param Bu $bu
     * @return mixed
     */



    public function destroy($id , Bu $bu)
    {

            $bu->find($id)->delete();

            return redirect('/adminpanel/bu')->withFlashMessage('real estate deleted successfully');




    }


    /**
 * store the add Real estate
 */
    public function store(Requests\BuRequest $buRequest ){

        $user= Auth::User();
        $data=[
            'bu_name'=>$buRequest->bu_name,
              'bu_price'=>$buRequest->bu_price,
              'bu_rent'=>$buRequest->bu_rent,
              'bu_square'=>$buRequest->bu_square,
              'bu_type'=>$buRequest->bu_type,
              'bu_small_dis'=>$buRequest->bu_small_dis,
              'bu_meta'=>$buRequest->bu_meta,
              'bu_langtiude'=>$buRequest->bu_langtiude,
              'bu_latitude'=>$buRequest->bu_latitude ,
              'bu_large_dis'=>$buRequest->bu_large_dis,
              'bu_status'=>$buRequest->bu_status,
              'user_id'=>$user->id

        ];

        Bu::create($data);
        return Redirect('adminpanel/bu')->withFlashMessage('Real Estate Add successfully');

    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */


    public function edit( $id )
    {
        $bu= Bu::find($id);

        return view('admin.bu.edit', compact('bu'));
    }

    /**
     * @param $id
     * @param Requests\BuRequest $buRequest
     * @return mixed
     */



    public function update($id  ,Requests\BuRequest $buRequest ){
        $buUpdated= Bu::find($id);
        $buUpdated->fill($buRequest->all())->save();

        return redirect('/adminpanel/bu')->withFlashMessage('real estate edited successfully');

    }







}
