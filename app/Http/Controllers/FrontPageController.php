<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MoneyChange;

class FrontPageController extends Controller
{
    public function index()
    {
    	return view('frontend.home.home');
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
    	return redirect('/client/registration')->with('message','Your Change are save');

    }
}
