<?php

namespace App\Http\Controllers;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use Auth;
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

    public function index() 
    {
        

        return view('pages/admin/admin');
    
    }


     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function main() 
    {
        $data = ContactInfo::all();
       
        return view('pages/admin/main/main', [ 'data' => $data ]);
    
    }

  
    // Logout

    public function logout(Request $request)
    {

        Auth::logout();
       
        return redirect('admin/login');
    }

    public function destroy($id)
    {
        
        
        Admin::where($id)->delete();

        return redirect('admin/login')->with('success', 'Account has been deleted.');
    }
}

