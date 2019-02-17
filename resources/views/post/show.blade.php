@extends('layouts.app')

@section('content')
		<a href="/posts" class="btn btn-secondary ">Go Back</a>
        <h4>{!! $body->title !!}</h4>

        <div class="card card-box">
        	{!! $body->body !!}
        </div>
        <hr>
        <small>Written at {{ $body->created_at }} by {{ $body->user->name }}</small>
        @if (!Auth::guest())
                @if (Auth::user()->id == $body->user->id)
                        {!! Form::open(['action'=>['PostsController@destroy',$body->id],'method'=>'POST']) !!}
                        <a href="/posts/{{ $body->id }}/edit" class="btn btn-primary" style="float:right;">Edit</a>
                                {{ Form::submit('Delete',['class'=>'btn btn-danger','style'=>'float:right;']) }}
                        {!! Form::hidden('_method','DELETE') !!}
                        {!! Form::close() !!} 
                @endif
        @endif
        
@endsection