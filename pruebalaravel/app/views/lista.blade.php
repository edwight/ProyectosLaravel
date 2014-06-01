 <html>
 <head>
  {{ HTML::script('js/jquery.js') }}
  {{ HTML::script('js/functions.js') }}
</head>
<body>
<h1>
	
	
  Usuarios
</h1>
 
 
<ul>
  @foreach($usuarios as $usuario)
  <!-- Equivalente en Blade a <?php //foreach ($usuarios as $usuario) ?> -->
    <li>
      {{ $usuario->full_name.' '.$usuario->email }} 
    </li>
    <!-- Equivalente en Blade a <?php //echo $usuario->nombre.' '.$usuario->apellido ?> -->
  @endforeach 
</ul>
</body>