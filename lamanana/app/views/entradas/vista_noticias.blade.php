<h1>noticias</h1>
<br>
<ul>
@foreach($noticias as $noticia)
<li>
{{$noticia->name.''.$noticia->description}}
</li>
@endforeach
</ul>