<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function indexUsers(){
        $data = User::get();

        return view('dashboard.user', compact('data'));
    }

    public function indexEditUser($id){
        $data = User::where('id',$id)->first();
        return view ('dashboard.edit-user', compact('data'));
    }

    public function updateIndex(Request $request , $id){

        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address           
        ]);

        return redirect(route('indexUser'));
    }

    public function delete($id){
        User::where('id',$id)->delete();
        return redirect(route('indexUser'));
}

}
