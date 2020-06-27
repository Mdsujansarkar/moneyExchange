@extends('backend.master')
@section('backend')
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
			<table class="table" border="1">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">Accept</th>
			      <th scope="col">We Buy</th>
			      <th scope="col">We sell</th>
			      <th scope="col">Avalavel</th>
			      <th scope="col">Publication Status</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($moneyChanges as $moneyChange)
			    <tr>
			      <th scope="row">{{$moneyChange->id}}</th>
			      <td>{{$moneyChange->addchange_accept}}</td>
			      <td>{{$moneyChange->addchange_buy}}</td>
			      <td>{{$moneyChange->addchange_sell}}</td>
			      <td>{{$moneyChange->addchange_availavel}}</td>
				  <td>{{$moneyChange->publication_status==1?'Published':'Unpublished'}}</td>
				  <td>
				  	@if($moneyChange->publication_status==1)
				  	<a href="{{route('unpublished.change',['id'=>$moneyChange->id])}}"><i class="fa fa-arrow-up"></i></a>
				  	@else
				  	<a href="{{route('published.change',['id'=>$moneyChange->id])}}"><i class="fa fa-arrow-down"></i></a>
				  	@endif
				  	<a href="{{route('edit.change',['id'=>$moneyChange->id])}}"><i class="fa fa-edit"></i></a>
				  	<a href="{{route('delete.change',['id'=>$moneyChange->id])}}"><i class="far fa-trash-alt"></i>delete</a>
				  </td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
          </div>
        </div>
@endsection;