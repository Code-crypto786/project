<?php

namespace App\Http\Controllers; 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    Public Function login(Request $req){
        
       $user = User::Where(['email'=>$req->email])->first();
       if(!$user || !Hash::check($req->password,$user->password)){
           $error = "Invalid email or Password ";
           return view("login",['error'=>$error]);
           
       }else{
           $req->session()->put('user',$user);
           return redirect('/');
       }
    }
    function Register(Request $req){
        $user = new user;
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        $con_password = $req->confirm;
        $auth = "user";
        if($password == $con_password){
            if(empty($name) or empty($email) or empty($password) or empty($con_password) or empty($auth)){
                $error=" All fields are required";
                return view("register",['error'=>$error]);
            }
            else
            {
                $password = hash::make($password);
                $user->name=$name;
                $user->email=$email;
                $user->password=$password;
                $user->auth = $auth;
               
                $user->save();
                return redirect("login");
            }
        }
        else{
           $error= " Password did't match ! ";
           return view("register",['error'=>$error]);
        }
        
    }
}
