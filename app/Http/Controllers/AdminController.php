<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getLoginAdmin(){
        if(session('admin'))
        {
            return redirect()->back();
        }
        else{
            return view('admin.page.login');
        }
      
        
    }

    public function postLoginAdmin(Request $req)
    {
        
        // check user and pass
        $admin = Admin::where('id',$req->id)
                    ->where('pass', $req->pass)->first();
    
        if (isset($admin)) {
            session()->regenerate();
            session(['admin' => $admin]);

            return redirect('admin/reception');
        }
        else {
            return redirect()->back()->with('danger', 'ID、もしくはパスワードが異なります。');
        }
    }


    public function logout()
    {
        Session::forget('admin');
        if(session('admin'))
        {
            return redirect()->back();
        }
        else{
            return Redirect('admin/login');
        }
    }

    public function getReception(){
        // check login
        $adminLogged = Session::get('admin');
        if ($adminLogged == null) {
            return redirect('/admin/login');
        }


        return view('admin.page.reception');
    }

    public function getDetail(){
        // check login
        $adminLogged = Session::get('admin');
        if ($adminLogged == null) {
            return redirect('/admin/login');
        }


        return view('admin.page.detail');
    }
}
