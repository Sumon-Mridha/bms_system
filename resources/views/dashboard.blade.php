@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="posts/create" class="btn btn-primary">Create Posts</a>
                    <hr>
                    @if (count($posts)>0)
                        Your Blogs Here
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td><a href="/posts/{{ $post->id }}/edit" class="btn btn-primary" style="float:right;">Edit</a>
                                        </td>
                                        <td>
                                            {!! Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST']) !!}
                                                {{ Form::submit('Delete',['class'=>'btn btn-danger','style'=>'float:right;']) }}
                                            {!! Form::hidden('_method','DELETE') !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>You have no post</p>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
