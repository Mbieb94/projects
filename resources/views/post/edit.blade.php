@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Edit Post</div>
					<div class="panel-body">
						<form class="" action="{{ route('post.update', $post) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('PATCH') }}
							<div class="col-md-6 form-group">
								<label for="">Title</label>
								<input type="text" class="form-control" name="title" placeholder="Judul Post" value="{{ $post->title }}"></input>
							</div>
							<div class="col-md-6 form-group">
								<label for="">Category</label>
								<select name="category_id" class="form-control">
									<?php foreach ($categories as $category): ?>
										<option 
											value="{{ $category->id }}"
											@if ($category->id === $post->category_id)
												selected
											@endif
										> {{ $category->name }} 
										</option>	
									<?php endforeach ?>
								</select>
							</div>
							<div class="col-md-12 form-group">
								<label for="">Content</label>
								<textarea name="content" rows="8" class="form-control">{{ $post->content }}</textarea>
							</div>
							<div class="col-md-2 form-group">
								<input type="submit" value="Update" class="btn btn-primary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
@endsection