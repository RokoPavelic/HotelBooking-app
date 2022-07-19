<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ContactInfo;
use App\Models\Message;
use Mail;
class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
      return view('pages/contact-us/contact-us');
    }
    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        
        // Form validation
        $this->validate($request, [
            'name'            => 'required',
            'email'           => 'required|email',
            'phone'           => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'         => 'required',
            'message'         => 'required'
         ]
        );
        

        $contact_infos = ContactInfo::create([
            'name'            => $request->name,
            'email'           => $request->email,
            'phone_number'    => $request->phone,
        ]);
        
        
        $message = Message::create([
            'subject'         => $request->subject,
            'message'         => $request->message,
            'contact_info_id' => $contact_infos->id
        ]);
       
        
        $request->session()->flash('success');
        return back();
    }

    public function app()
    {
        return view('pages/contact-us/contact-us');
    }
}