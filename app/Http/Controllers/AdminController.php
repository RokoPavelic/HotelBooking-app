<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\ContactInfo;
use Cookie;

// class Admin extends Controller
// {
//     public function adminHome(){
//         return view('pages.admin');
//     }
// }

class AdminController extends Controller
{
    // Login
    function login()
    {
        return view('pages.admin.login');
    }

    // Check Login

    function check_login(Request $request)
    {
        $request->validate([
            'username'     => 'required',
            'password'     => 'required',
        ]);
        $admin = Admin::where(['username' => $request->username, 'password' => sha1($request->password)])
            ->count();
        if ($admin > 0) {
            $adminData = Admin::where(['username' => $request->username, 'password' => sha1($request->password)])
                ->get();
            session(['adminData' => $adminData]);

            if ($request->has('remember_me')) {
                Cookie::queue('adminuser', $request->username, 1440);
                Cookie::queue('adminpwd', $request->password, 1440);
            }
            return redirect('admin');
        } else {
            return redirect('admin/login')->with('msg', 'Invalid username/Password!!!');
        }
    }
    public function create()
    {
        return view('pages.admin.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required|max:255',
            'last_name'   => 'required|max:255',
            'phone'       => 'required|max:255',
            'username'    => 'required|min:3|max:255|unique:admins,username',
            'email'       => 'required|email|max:255',
            'password'    => 'required|min:7|max:255',
        ]);

        $contact_infos = ContactInfo::create([
            'name'        => $request->name,
            'last_name'   => $request->last_name,
            'phone'       => $request->phone,
            'email'       => $request->email,
            'phone_number'=> $request->phone,
        ]);

        $admin = Admin::create([
            'username'    => $request->username,
            'password'    => $request->password === $request->password_verify ? sha1($request->password) : response()->json(["error"=>"Password is incorrect"]),
        ]);

        // auth()->login(ContactInfo::create($contact_infos));
        // auth()->login(Admin::create($admin));

        return redirect('/admin/login')->with('success', 'Your account has been created.');
    }
    // Logout

    function logout()
    {
        session()->forget(['adminData']);
        return redirect('admin/login');
    }
}
