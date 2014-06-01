<?php

class NoticiasController Extends BaseController 
{
	public function mostrarNoticias()
	{
	$noticias = ModelsNoticias::all();
	return View::make('entradas.vista_noticias', array('noticias' => $noticias));
	}
}
?>