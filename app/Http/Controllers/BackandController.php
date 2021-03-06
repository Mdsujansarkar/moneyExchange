<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Registration;
use App\Model\Order;
use App\Model\AddChange;
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

     public function orderUnChange($id)
    {
    	$order = Order::find($id);
    	$order->order_status='panding';
    	$order->save();
    	return redirect( '/backends' )    ->with( 'message', 'Unpublish' );
    }

    public function addChange()
    {
    	return view('backend.change.change');
    }

    public function changeMoney(Request $request)
    {
    	$moneyChange = new AddChange();
    	$moneyChange ->addchange_accept 			= $request->addchange_accept;
    	$moneyChange ->addchange_buy 				= $request->addchange_buy;
    	$moneyChange ->addchange_sell 				= $request->addchange_sell;
    	$moneyChange ->addchange_availavel 			= $request->addchange_availavel;
    	$moneyChange ->publication_status 			= $request->publication_status;
    	$moneyChange ->save();

    	return redirect('/add/change')->with('message','Add successfully');
    }

    public function changeManage()
    {
    	$moneyChanges = AddChange::all();

    	return view('backend.change.manage',['moneyChanges' =>$moneyChanges]);
    }

    public function changeUnpublish($id)
    {
    	$changePublish = AddChange::find($id);
    	$changePublish->publication_status = 0;
    	$changePublish->save();
    	return redirect('/change/manage')->with('message','Add successfully');
    }

    public function changePublish($id)
    {
    	$changePublish = AddChange::find($id);
    	$changePublish->publication_status = 1;
    	$changePublish->save();
    	return redirect('/change/manage')->with('message','Add successfully');
    }  
    public function changeEdit($id)
    {
    	$changePublish = AddChange::find($id);
    	return view('backend.change.edit',['changePublish' =>$changePublish]);
    }
    public function changeUpdate(Request $request)
    {
    	$changePublish = AddChange::find($request->change_id);
    	$changePublish -> addchange_accept = $request->addchange_accept;
    	$changePublish -> addchange_buy = $request->addchange_buy;
    	$changePublish -> addchange_sell = $request->addchange_sell;
    	$changePublish -> addchange_availavel = $request->addchange_availavel;
    	$changePublish -> publication_status = $request->publication_status;
    	$changePublish -> save();
    	return redirect('/change/manage')->with('message','Update successfully');

    }
    public function changeDelete($id)
    {
    	$changePublish = AddChange::find($id);
    	$changePublish ->delete();
    	return redirect('/change/manage')->with('message','Update successfully');
    }
  
}
