# Aplicação Laravel Code Education


## Documentação Oficial 

A documentação do framework pode ser encontrada no  [site Laravel ](http://laravel.com/docs).

## Projeto 1
- Criado o controller Blog
``` 
 php artisan make:controller  
``` 
- Adicionado ação index
``` 
    protected  function  index(){
        $posts = Post::all();
        return view('/blog/index',['posts'=>$posts]);
    }
```
- Adicionada a rota
```
  Route::get('/blog/index', "Blog@index");
```
- Adicionado o arquivo de exibição de posts em view\blog\index
 ```
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
 ```
