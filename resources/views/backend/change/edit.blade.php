@extends('backend.master')
@section('backend')
<div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h3 class="page-header"><i class="fa fa-laptop"></i> {{Session::get('message')}}</h3>
              <form action="{{route('new.money.change')}}" method="post">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">We Accept</label>
                    <input type="text" name="addchange_accept" value="{{$changePublish->addchange_accept}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="We Accept">
                    <input type="hidden" name="change_id" value="{{$changePublish->id}}">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">We buy</label>
                    <input type="text" class="form-control" name="addchange_buy" value="{{$changePublish->addchange_buy}}"id="exampleInputPassword1" placeholder="We buy">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">We Sell</label>
                    <input type="text" class="form-control" value="{{$changePublish->addchange_sell}}"name="addchange_sell" id="exampleInputPassword1" placeholder="We buy">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Availavel</label>
                    <input type="text" class="form-control" value="{{$changePublish->addchange_availavel}}"name="addchange_availavel" id="exampleInputPassword1" placeholder="We buy">
                  </div>
                  <!-- Text input-->
                <div class="form-group">
                    <label class=" control-label" for="product_name_fr">Publication Status</label>
                    <div class="">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" {{$changePublish->publication_status == 1? 'checked':''}}type="radio" name="publication_status"  value="1" id="inlineRadio1">
                            <label class="form-check-label" for="inlineRadio1">Publish</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" {{$changePublish->publication_status == 0? 'checked':''}} name="publication_status" value="0">
                            <label class="form-check-label" for="inlineRadio2">Unpublish</label>
                        </div>

                    </div>
                </div>
                  
                  <button type="submit" name="btn" class="btn btn-primary">Update</button>
              </form>
          </div>
        </div>
@endsection