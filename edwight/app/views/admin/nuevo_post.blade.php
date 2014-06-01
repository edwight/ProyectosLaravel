<h1>Nuevo Post</h1>
{{Form::open(array('action' => 'AdminController@store'))}}
{{Form::label('titulo','Titulo')}}
{{Form::text('titulo','')}}
{{Form::label('contenido','Contenido')}}
{{Form::text('contenido','')}}
{{Form::label('categoria','Categoria')}}
{{Form::text('categoria','')}}
{{Form::button('Crear Nuevo', array('type'=>'submit'))}}
{{Form::close()}}