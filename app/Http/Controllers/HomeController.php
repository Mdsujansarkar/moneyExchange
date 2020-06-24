<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Registration;
use App\Model\Order;
use App\Model\MoneyChange;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $orders = DB::table('money_changes')
        ->join('registrations','registrations.id','=','money_changes.id')
        ->join('orders','orders.id','registrations.id')
        ->select('money_changes.*','registrations.f_name','registrations.l_name','registrations.user_name','registrations.email_address','registrations.phone_number','registrations.nid','orders.*')
        ->get();
        
        return view('backend.home.home',['orders' =>$orders]);
    }
}
