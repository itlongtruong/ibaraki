<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin(){

        if(session('user'))
        {
            return redirect()->back();
        }
        else{
            return view('public.page.login');
        }
        
    }

    public function postLogin(Request $req)
    {
        
        // check user and pass
        $user = Users::where('id',$req->id)
                    ->where('pass', $req->pass)->first();
    
        if (isset($user)) {
            session()->regenerate();
            session(['user' => $user]);

            return redirect('form1');
        }
        else {
            return redirect()->back()->with('danger', 'ID、もしくはパスワードが異なります。');
        }
    }


    public function logout()
    {
        Session::forget('user');
        if(session('user'))
        {
            return redirect()->back();
        }
        else{
            return Redirect('login');
        }
    }

    public function getRegister(){
        return view('public.page.register');
    }
    public function getForm1(){
        return view('public.page.form1');
    }
    public function getForm2(){
        return view('public.page.form2');
    }
    public function getForm3(){
        return view('public.page.form3');
    }
    public function getForm4(){
        return view('public.page.form4');
    }
    public function getForm5(){
        return view('public.page.form5');
    }
    public function getForm6(){
        return view('public.page.form6');
    }
    public function getForm7(){
        return view('public.page.form7');
    }
}
