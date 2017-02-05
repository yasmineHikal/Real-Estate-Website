<?php

namespace App\Http\Controllers;

use App\Bu;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddUserRequestAdmin;
use Illuminate\Support\Facades\Redirect;
use Datatables;



class userController extends Controller
{
    //

    public function index( User $user){
       $user =$user->all();
        return view('admin.users.index' , compact('user'));
    }


     public function create(){

        return view('admin.users.add');
    }

    public  function store(AddUserRequestAdmin $request ,User $user)
    {
       $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/adminpanel/users')->withFlashMessage('user added successfully');
    }

    public function edit($id , User $user){

        $user= $user->find($id);

        return view('admin.users.edit', compact('user'));
    }

    public function update($id ,User $user ,Request $request ){
        $userUpdated= $user->find($id);
        $userUpdated->fill($request->all())->save();

        return redirect('/adminpanel/users')->withFlashMessage('user edited successfully');

    }

    public function updatePassword(Request $request ,User $user ){
        $userUpdate= $user->find($request->user_id);
        //dd($userUpdate);
        $password = bcrypt($request->password);
        $userUpdate->fill(['password'=>$password])->save();

        return redirect('/adminpanel/users')->withFlashMessage('Password edited successfully');
    }


    public function destroy($id , User $user)
    {
        if ($id != 1) {
            $user->find($id)->delete();

            //delete real estate that this user added
            Bu::where('user_id'==$id)->delete();

            return redirect('/adminpanel/users')->withFlashMessage('user deleted successfully');

        }
        return redirect('/adminpanel/users')->withFlashMessage('you not allowed to delete this user');

    }








}
