@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">

				<h1>Thiago Fernandes</h1>

				@foreach ($posts->all() as $post)
				<div class="panel panel-default">
				<div class="panel-heading"><h3>{{$post->title}}</h3></div>
				<div class="panel-body">{{$post->content}}</div>
				</div>
					<br>
				@endforeach

		</div>
	</div>
</div>
@endsection
