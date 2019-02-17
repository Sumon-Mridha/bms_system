@extends('layouts.app')

@section('content')
        <h4>Create Post</h4>
        <div class="row">
        	<div class="col-2"></div>
        	<div class="col-8">
        		{!! Form::open(['action' => 'PostsController@store','method'=>'POST', 'enctype'=> 'multipart/form-data']) !!}
		        	<div class="form-group">
		        		{{ Form::label('','Title') }}
		        		{{ Form::text('title','',['class'=>'form-control','placeholder'=>'Title']) }}
		        	</div>
		        	<div class="form-group">
		        		{{ Form::label('','Body') }}
		        		{{ Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body']) }}
		        	</div>
		        	<div class="form-group">
		        		{{ Form::file('cover_image') }}
		        	</div>
		        	<div class="form-group">
		        		{{ Form::submit('Submit',['class'=>'btn btn-primary']) }}
		        	</div>
				{!! Form::close() !!}
        	</div>
        	<div class="col-2"></div>
        </div>
        
@endsection