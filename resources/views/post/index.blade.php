@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
			@foreach($post as $posts)
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	<a href="{{ route('post.show', $posts) }}">{{ $posts->title }}</a>

	                	<div class="pull-right">
	                		<form class="" action="{{ route('post.destroy', $posts) }}" method="post">
	                			{{ csrf_field() }}
	                			{{ method_field('DELETE') }}
	                			<button type="submit" class="btn btn-xs btn-danger">Delete</button>
	                		</form>
	                	</div>
	                	<div class="pull-right">
	                		<form class="" action="{{ route('post.edit', $posts) }}" method="get">
	                			{{ csrf_field() }}
	                			{{ method_field('EDIT') }}
	                			<button type="submit" class="btn btn-xs btn-success">Update</button>
	                		</form>
	                	</div>
	                </div>

	                <div class="panel-body">
	                    <p>{{ str_limit($posts->content, '100', ' ...') }}</p>
	                </div>
	            </div>
			@endforeach
	        </div>
	    </div>
	</div>
@endsection
