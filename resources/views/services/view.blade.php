@extends('layouts.erp')

@section('title', 'Services')

@section('content')

<ul>
@foreach($services as $service)
<li>
	{{ $service->name }}	
</li>
@endforeach
</ul>


@endsection