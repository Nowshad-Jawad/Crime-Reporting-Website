@extends('layouts.app')

@section('content')


@include('inc.navbar')

<!-- Users -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    @if($user->role == 0)
        <td>{{__('Civillian')}}</td>
    @elseif($user->role == 1)
        <td>{{__('Police')}}</td>
    @else 
        <td>{{__('Head Quaters')}}</td>
    @endif
    <td><a href="admin/{{$user->id}}/edit"><button>Edit</button></a></td>
    <td><a href="admin/{{$user->id}}"><button>Delete</button></a></td>
    </tr>
    @endforeach
    </tbody>
</table>

<a href="redirects"><button>Go Back To Dashboard</button></a>


@include('inc.footer')
@endsection
