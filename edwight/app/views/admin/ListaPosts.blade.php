<h1>lista de post</h1>

@foreach($Articulo as $articulo)
	<br/>
	{{$articulo->id.''.$articulo->titulo.''.$articulo->description.''.$articulo->leyenda}}
	<a href="$articulo->imagen"><src=$articulo->imagen></a>
	
@endforeach