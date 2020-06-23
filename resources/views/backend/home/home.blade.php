@extends('backend.master')
@section('backend')
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
            <table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Send Money</th>
      <th scope="col">Resive Money"</th>
      <th scope="col">Give Money</th>
      <th scope="col">Total Money</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Nid</th>
      <th scope="col">Customer id</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	@foreach($orders as $order)
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->sendmoney}}</td>
      <td>{{$order->resive_money}}</td>
      <td>{{$order->enter_money}}</td>
      <td>{{$order->total_money}}</td>
      <td>{{$order->f_name.''.$order->l_name}}</td>
      <td>{{$order->user_name}}</td>
      <td>{{$order->email_address}}</td>
      <td>{{$order->phone_number}}</td>
      <td>{{$order->nid}}</td>
      <td>{{$order->customer_id}}</td>
      <td>{{$order->order_status}}</td>
      <td>
        <a href="{{route('view.order.change',['id'=>$order->id])}}" style="padding:3px; background-color:green;color:#FFF" title="edit"><i class="fa fa-edit"></i></a>
        <a href="" style="padding:3px; background-color:green;color:#FFF" title="Delete"><i class="fa fa-eraser"></i></a>
        <a href="" style="padding:3px; background-color:green;color:#FFF" title="Complite"><i class="fa fa-long-arrow-up"></i></a>
        <a href="" style="padding:3px; background-color:green;color:#FFF" title="panding"><i class="fa fa-long-arrow-down"></i></a>
      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>
          </div>
        </div>
@endsection;