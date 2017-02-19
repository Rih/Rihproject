@extends('layouts.erp')

@section('title', 'Usuarios')

@section('content')

<ul>

@foreach($users as $user)
<li>
	{{ $user->email }}	
</li>
@endforeach
</ul>


@endsection