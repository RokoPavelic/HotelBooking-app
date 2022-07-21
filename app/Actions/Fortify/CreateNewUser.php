<?php

namespace App\Actions\Fortify;

use App\Models\Admin;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        
        Validator::make($input, [
            'email' => ['required', 
            'string', 
            'max:255',
            Rule::unique(Admin::class),
        ],
            
            'password' => $this->passwordRules(),
        ])->validate();

        $contact_infos = ContactInfo::create([
            'name'        => $input['name'],
            'lastname'    => $input['last_name'],
            'phone'       => $input['phone'],
            'email'       => $input['email'],
            'phone_number'=> $input['phone'],
        ]);



        return Admin::create([
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

    }
}
