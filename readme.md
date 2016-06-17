# Aplicação Laravel Code Education


## Documentação Oficial 

A documentação do framework pode ser encontrada no  [site Laravel ](http://laravel.com/docs).

## Projeto 1
- Criado o model Post
``` 
php artisan make:model Post
``` 
- Criado o controller BlogController
``` 
 php artisan make:controller BlogController
``` 
- Adicionado ações do controller
``` 
    protected  function  index(){
        $posts = Post::all();
        return view('/blog/index',['posts'=>$posts]);
    }
    protected  function  index(){
        $posts = Post::all();
        return view('/blog/index',['posts'=>$posts]);
    }
    protected  function  adicionar(Request $request){
        $data = $request->all();
        Post::create([
            'title' => $data['title'],
            'content' => $data['content'],
        ]);
        return  redirect('/blog/index');
    }
    protected  function  remover($id){
        $post = Post::find($id);
        $post->delete();
        return  redirect('/blog/index');
    }
```
- Adicionada as rotas
```
  Route::get('/blog/index', "BlogController@index");
  Route::post('/blog/adicionar', "BlogController@adicionar");
  Route::post('/blog/remover/{id}', "BlogController@remover");
```
- Adicionado o arquivo de exibição de posts em view\blog\index

