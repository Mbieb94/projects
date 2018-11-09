@extends('layouts.app')

@section('content')
	<div class="container">
		<form class="" action="{{ route('post.save') }}" method="post">
			{{ csrf_field() }}
			<div class="col-md-6 form-group">
				<label for="">Title</label>
				<input type="text" class="form-control" name="title" placeholder="Judul Post"></input>
			</div>
			<div class="col-md-6 form-group">
				<label for="">Category</label>
				<select name="category_id" class="form-control">
					<?php foreach ($categories as $category): ?>
						<option value="{{ $category->id }}"> {{ $category->name }} </option>	
					<?php endforeach ?>
				</select>
			</div>
			<div class="col-md-12 form-group">
				<label for="">Content</label>
				<textarea name="content" rows="8" class="form-control"></textarea>
			</div>
			<div class="col-md-2 form-group">
				<input type="submit" value="Save" class="btn btn-primary">
			</div>
		</form>
	</div>
@endsection