<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\users;

class UserController extends Controller
{
     public function register(Request $request)
     {
        // dd($request ->all());
        $email =$request->input('email');
        $name = $request->input('name');
        $userEmail = User::where('email',$email)->first();
        $userName = User::where('name',$name)->first();

       $password = $request->input('password');
       $passwordRepeat = $request->input('password-repeat');

     if ($userEmail){
        echo " <script>alert('Email Chosen. please choose another email ');
        window.location='/';
    </script>";
     } else if($userName) {
        echo " <script>alert('Name already exist ');
        window.location='/';
    </script>";
     }
  else if($password == $passwordRepeat) {
        $users = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
        ]);
        return response()->json(["ID" => $users->id, "NAME" => $users->name, "EMAIL" => $users->email]);
       }
       else {
        echo " <script>alert('Password does not match');
        window.location='/';
    </script>";
       }
}
             
     
     public function update(User $user){
        return view('update', ['user'=> $user]);
       }

      public function updateUser(User $request, $id){
    
        $request->replicate([
            'Name' => 'required',
            'Email' => 'required',
        ]);
        $user = User::find($id);
        $user->update([
            'Name' => request('name'),
            'Email' => request('email'),
        ]);
    
        return response()->json(['Success' => $user]);
      }
    
       public function getUser($id){
        $user = User::where('id',$id)->first();
        if (!$user) return response()->json('Not found', 404);
            return $user;
       }
    
       public function delete($id){
       
        $user = User::find($id);    
        $user->delete();
        return response()->json(['Successfully deleted' => $user]);
       }
    
    //    public function getUsers(){
       
    //     $users = User::all();
    
    //     return view('users',['users'=>$users]);
    // }
    public function getUsers()
    {
        $all = User::all();
    
        return view('/users',compact('all'));
    }

}
