<h1>Nuevo Articulo</h1>
{{Form::Open()}}
{{Form::label('titulo','Titulo')}}
{{Form::text('titulo','')}}
{{Form::label('leyenda','Leyenda')}}
{{Form::text('leyenda','')}}
{{Form::label('description','description')}}
{{Form::text('description','')}}
{{Form::label('imagen','imagen')}}
{{Form::text('imagen','')}}
{{Form::label('etiquetas','etiquetas')}}
{{Form::text('etiquetas','')}}
{{Form::close()}}