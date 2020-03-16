@extends("layouts.global")

@section("title") Users list @endsection
@section("content")
<h1>Management Users</h1>
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif

<div class="row">
    <div class="col-md-12 text-right">
        <a href="{{route('users.create')}}" class="btn btn-primary">Create user</a>
   </div>
</div>

   <br>   

<table class="table table-bordered">
    <thead>
        <tr>
            <th><b>Name</b></th>
            <th><b>Username</b></th>
            <th><b>Email</b></th>
            <th><b>Action</b></th>
        </tr>
    </thead>
    <tbody>

        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->email}}</td>
            
            <td>
                <a class="btn btn-info text-white btn-sm" href="{{route('users.edit', [$user->id])}}">Edit</a>

                <a href="{{route('users.show', [$user->id])}}" class="btn btn-primary btn-sm">Detail</a>
                
                <form onsubmit="return confirm('Delete this user permanently?')" class="d-inline"
                    action="{{route('users.destroy', [$user->id ])}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">

                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan=10>
                {{$users->appends(Request::all())->links()}}
            </td>
        </tr>
    </tfoot>
</table>
@endsection
