@extends('layouts.app')

@section('content')
    	<h4>{{$title}}</h4>
    	<ul class="list-group">
    		@if(isset($services))
	    		@foreach($services as $service)
	    			<li class="list-group-item">{{ $service }}</li>
	    		@endforeach
    		@endif
    	</ul>
@endsection