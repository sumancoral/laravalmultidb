@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            
        </tr>
    @foreach ($users as $key => $user)
    <tr>
       
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
         <td>{{ $user->phone }}</td>
       
    </tr>
    @endforeach
    </table>
    
     <table class="table table-bordered">
        <tr>
            
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
           
        </tr>
    @foreach ($items as $key => $item)
    <tr>
       
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
         <td>{{ $item->phone }}</td>
       
    </tr>
    @endforeach
    </table>

    

@endsection