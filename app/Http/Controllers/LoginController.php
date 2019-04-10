<?php
use Illuminate\Support\Facades\Redirect;
namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function getlogin(){
        return view('login');
    }
    public function postlogin(Request $request){
        if(\Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password])){
            return redirect('product');
        }else{
            return redirect('/register');
        }
    }
   
    public function keluar(Request $request) {
        Auth::logout();
        return redirect('/signin');
      }
     
        
}
