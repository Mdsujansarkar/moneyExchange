<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Registration;
use Session;

class RegistrationController extends Controller
{
	public function validation($request)
	{
		$this->validate($request,[
		    'f_name' 		=> 'required',
		    'l_name'  		=> 'required',
		    'user_name' 	=> 'required',
		    'email_address' => 'required|email|unique:registrations,email_address',
		    'phone_number' 	=> 'required|min:6|max:13',
		    'password' 		=> 'required|confirmed|min:6',
		    'nid' 			=> 'nullable'
		]);
	}

    public function index(Request $request)
    {

    	$this->validation($request);
    	$registration 					= new Registration();
    	$registration->f_name 			= $request ->f_name;
    	$registration->l_name 			= $request ->l_name;
    	$registration->user_name 		= $request ->user_name;
    	$registration->email_address 	= $request ->email_address;
    	$registration->phone_number 	= $request ->phone_number;
    	$registration->password 		= bcrypt($request ->password);
    	$registration->nid 				= $request ->nid;
    	$registration->save();
    	return redirect('/client/registration')->with('message','Your Change are save');

    }

    public function login(Request $request)
    {
    	$this->validate( $requst,[
            'email_address'              => 'required|email_address',
            'password'           		 => 'required|min:6',
        ]);

        $loginCustomer			= Registration::where('email_address', $request->email_address)->first();
          if (password_verify($request->password, $loginCustomer->password)) {

            Session::put('customrId', $loginCustomer->id);

            Session::put('customerName',$loginCustomer->f_name. ' '.$loginCustomer->l_name);

            return redirect('/checkout/shipping');

        } else {

            return redirect('/customer/login')->with('message',"password or email address are not metch");
        }
    }
}
