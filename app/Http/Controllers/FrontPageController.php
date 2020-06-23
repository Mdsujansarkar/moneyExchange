<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Registration;
use App\Model\Order;
use App\Model\MoneyChange;
use DB;

class FrontPageController extends Controller
{
    public function index()
    {
        $orders = DB::table('money_changes')
        ->join('registrations','registrations.id','=','money_changes.id')
        ->join('orders','orders.id','registrations.id')
        ->select('money_changes.*','registrations.f_name','registrations.user_name','registrations.email_address','registrations.phone_number','registrations.nid','orders.*')
        ->get();
    	return view('frontend.home.home',['orders'=>$orders]);
    }
    public function registration()
    {
        
    	return view('frontend.register.register');
    }
    public function login()
    {
    	return view('frontend.register.login');
    }
    public function moneyChange(Request $request)
    {
    	$this->validate($request,[
		    'sendmoney' 	=> 'required',
		    'resive_money'  => 'required',
		    'enter_money' 	=> 'required',
		    'total_money' 	=> 'required'
		]);
    	$moneyChange 				= new MoneyChange();
    	$moneyChange->sendmoney 	= $request ->sendmoney;
    	$moneyChange->resive_money  = $request ->resive_money;
    	$moneyChange->enter_money   = $request ->enter_money;
    	$moneyChange->total_money 	= $request ->total_money;
    	$moneyChange->save();
    	return redirect('/page/registration')->with('message','Your Change are save');

    }
}
