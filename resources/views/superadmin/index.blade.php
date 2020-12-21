@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Super Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="panel panel-default">
                            <div class="panel-heading">Manege User</div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                       <thead>
                                           <tr>
                                               <th>First Name</th>
                                               <th>Last Name</th>
                                               <th>Email</th>
                                               <th>Action</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           @foreach ($users as $user)
                                           <tr>
                                            <th>{{$user->firstName}}</th>
                                            <th>{{$user->lastName}}</th>
                                            <th>{{$user->email}}</th>
                                            <th>
                                                <input type="checkbox" class="toggle-class" data-id="{{$user->id}}" data-toggle="toggle"
                                                data-on="Enable" data-off="Disable" {{$user->status==true ? 'checked':''}} >
                                            </th>
                                        </tr>
                                           @endforeach

                                       </tbody>
                                </table>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
