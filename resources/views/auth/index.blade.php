@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Usuários</div>
				<div class="panel-body">
					<table class="table table-striped table-bordered">
						<thead>
						<th>Nome Usuário&nbsp;</th>
						<th>Email&nbsp;</th>
						<th>Data de Criação&nbsp;</th>
						</thead>
						<tbody>
						@foreach ($users->all() as $user)
							<tr>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->created_at->format('d/m/Y')}}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
