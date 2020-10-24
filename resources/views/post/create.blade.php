@extends('master')

@section('content')
<section>
	<h2>Create New Post</h2>
	<div class="posting">
		<div class="profile"></div>
		<form role="form" action="/post" method="POST">
			@csrf
			<div class="card-body">
				<div class="form-group">
					<textarea name="isi" id="isi" cols="" rows="3" class="post-input" placeholder="Tell me something"></textarea>
					@error('isi')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</div>
			</div> -->
			<!-- /.card-body -->

			<div class="card-footer">
				<a href="/post" class="cancel cancel-button">Cancel</a>
				<button type="submit" class="button-post">Post</button>
			</div>            
		</form>
	</div>

	<!-- <div class="ml-3 mt-3">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Create Post</h3>
			</div> -->
			<!-- /.card-header -->
			<!-- form start -->


			<!-- <form role="form" action="/post" method="POST">
				@csrf
				<div class="card-body">

					<div class="form-group">
						<label for="isi">Isi</label>
						<input type="text" class="form-control" id="isi" name="isi" placeholder="Isi Pertanyaan">
						@error('isi')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</div>
				</div> -->
				<!-- /.card-body -->

		<!-- <div class="card-footer">
			<button type="submit" class="btn btn-primary">Create</button>
		</div> -->
	<!-- </form>
</div>
</div> -->
</section>
@endsection