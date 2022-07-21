<?php

namespace App\Http\Controllers;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\ContactInfo;
use Cookie;



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
       
        return view('pages.admin.main.main', [ 'data' => $data ]);
    
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.main.create');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'lastname'       => 'required',
            'email'          => 'required',
            'phone_number'   => 'required',

        ]);

        
        $data                  = new ContactInfo;
        $data->name            = $request->name;
        $data->lastname        = $request->lastname;
        $data->email           = $request->email;
        $data->phone_number    = $request->phone_number;
        $data->address         = $request->address;
        $data->id_number       = $request->id_number;
        $data->bank_account    = $request->bank_account;
        $data->helth_insurance = $request->helth_insurance;
        $data->save();

        $admin           = new Admin;
        $admin->email    = $request->email;
        $admin->password = $request->password;
        $admin->save();

    

        return redirect('admin/main/create')->with('success', 'New Employee has been added');
    }

    public function edit($id)
    {

        $data = ContactInfo::find($id);
        return view('pages.admin.main.edit',['data' => $data]);
        return redirect('admin/main/' . $id . '/edit')->with('success', 'Data has been updated.');

    }


      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ContactInfo::find($id);
        return view('pages.admin.main.show',['data' => $data]);
        
    }

  
    // Logout

    public function logout(Request $request)
    {

        Auth::logout();
       
        return redirect('admin/login');
    }

    public function destroy($id)
    {

        ContactInfo::where('id', '=', $id)->delete();

        return redirect('/admin/main')->with('success', 'Account has been deleted.');
    }
}

