@extends('layouts.erp')

@section('title', 'Usuarios')

@section('content')

hola
<ul>
@foreach($users as $user)
<li>
	{{ $user->email }}	
</li>
@endforeach
</ul>


@endsection