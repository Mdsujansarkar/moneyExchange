<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Registration;
use App\Model\Order;
use DB;
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

        $customrId      = $registration  ->id;

        Session::put('customrId', $customrId);
        Session::put('customerName', $registration->f_name.' '.$registration->l_name);
    	return redirect('/confirm/order')->with('message','Your Change are save');
    }

    public function login(Request $request)
    {
        
            $this->validate( $request,[
            'email_address'              => 'required',
            'password'                   => 'required',
        ]);

        $loginCustomer          = Registration::where('email_address', $request->email_address)->first();

          if (password_verify($request->password, $loginCustomer->password)) {

            Session::put('customrId', $loginCustomer->id);

            Session::put('customerName',$loginCustomer->f_name. ' '.$loginCustomer->l_name);
            return redirect('/confirm/order');
        } else {
            return redirect('/client/login')->with('message',"password or email address are not metch");
        }
    }
    public function confirmOrder()
    {
        $customerId = Registration::find(Session::get('customrId'));
        // $all = DB::table('money_changes')
        // ->join('registrations','registrations.id','=','money_changes.id')
        // ->select('money_changes.*','registrations.f_name','registrations.l_name','registrations.user_name','registrations.email_address','registrations.phone_number','registrations.nid')
        // ->get();
        // return $customerId;

        return view('frontend.confirm.confirm',['customerId'=>$customerId]);
    }

    public function confirm(Request $request)
    {
         $order  = new Order();
            $order->customer_id = Session::get('customrId');
            $order->save();
        return view('frontend.confirm.complite');
    }
}
