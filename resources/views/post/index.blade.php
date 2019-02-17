@extends('layouts.app')

@section('content')
        <h4>Posts</h4>
        @if (isset($posts))
	        <div class="row">
	        	@foreach ($posts as $post)
	        	<div class="col-md-4 col-sm-4">
	        		<img src="/storage/cover_image/{{ $post->cover_image }}" style="width: 100px; height: 100px;">
	        	</div>
	        	<div class="col-md-8 col-sm-8">
	        		<div class="card card-body bg-light">
						<h3><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h3>
						<small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
					</div>
	        	</div>
				@endforeach
				{{ $posts->links() }}
	        </div>
		@else
		<p>There is no Post to show</p>
	@endif
@endsection