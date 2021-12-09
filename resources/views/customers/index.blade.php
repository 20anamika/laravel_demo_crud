
@extends('customers.layout')
@section('content')
    <div class="row">
        <div style="padding-top: 60px;"class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="color:green;">CRUD APPLICATION</h2>
            </div>
            <div class="pull-right">
                <a style="margin-bottom: 40px;" class="btn btn-success" href="{{ route('customers.create') }}{{ route('customers.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->contact_number }}</td>
            <td>
                <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{route('customers.show',$customer->id)}}">Show</a>
    
                    <a class="btn btn-primary" href="{{route('customers.edit',$customer->id)}}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $customers->links() !!}
      
@endsection