@extends('home')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:green;margin-top:30px;"> Show Customer Detail</h2>
            </div>
            <div class="pull-right">
                <a style="background-color:green;margin-top:30px;"class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
            </div> 
        </div>
    </div>
   
    <div style="margin-top:40px;" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $customer->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $customer->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Contact Number:</strong>
                {{ $customer->contact_number }}
            </div>
        </div>
    </div>
@endsection