<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Registration;
use App\Model\Order;
use App\Model\MoneyChange;
use DB;
class BackandController extends Controller
{
    // public function index()
    // {
    // 	 $orders = DB::table('money_changes')
    //     ->join('registrations','registrations.id','=','money_changes.id')
    //     ->join('orders','orders.id','registrations.id')
    //     ->select('money_changes.*','registrations.f_name','registrations.l_name','registrations.user_name','registrations.email_address','registrations.phone_number','registrations.nid','orders.*')
    //     ->get();
        
    // 	return view('backend.home.home',['orders' =>$orders]);
    // }

    public function orderChange($id)
    {
    	$order = Order::find($id);
    	$order->order_status='complite';
    	$order->save();
    	return redirect( '/backends' )    ->with( 'message', 'Unpublish' );
    }
  
}
