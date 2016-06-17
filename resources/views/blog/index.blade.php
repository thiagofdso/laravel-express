
@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

				<h1>Thiago Fernandes</h1>
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/blog/adicionar') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<label class="col-md-4 control-label">Título</label>
					<div class="col-md-6">
						<input type="text" class="form-control" name="title" value="{{ old('title') }}">
					</div>
				</div>

				<div class="form-group">
					<label class="col-md-4 control-label">Post</label>
					<div class="col-md-6">
						<textarea class="form-control" name="content" value="{{ old('content') }}"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Adicionar Post
						</button>
					</div>
				</div>
			</form>

				@foreach ($posts->all() as $post)
				<div class="panel panel-default">
				<div class="panel-heading">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/blog/remover/'.$post->id) }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<h3>{{$post->title}}
						<button type="submit" class="btn btn-link">
							<span class="glyphicon glyphicon-trash" alt="Excluir" aria-hidden="true"></span>
						</button></h3>
					</form>
				</div>
				<div class="panel-body">{{$post->content}}</div>
				</div>
					<br>
				@endforeach

		</div>
	</div>
</div>
@endsection
