<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PHPUnit\TextUI\XmlConfiguration\Constant;

class LoginController extends Controller
{
    public function pass(){
        $pass = Hash::make('12345');
        dd($pass);
    }

      public function adminLoginIndex(){
        $user =Auth::user();
        return view('admin/login');
    }

      public function adminLogin(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
        
            $user = User::login($request);

            if (isset($user["success"])) {
                return redirect("/admin/dashboard")->withSuccess('You have Successfully logged in');
            }
            return redirect("/admin/login")->with('error',$user["message"]);
        } catch(\Exception $e) {
            Log::emergency("Can't login" . $e->getMessage());
            return redirect("/admin/login")->with('error',$user["message"]);
        }

       
    }
    public function adminLogout(){
     
        auth()->logout();
        return redirect("/admin/login");
    }
     



}