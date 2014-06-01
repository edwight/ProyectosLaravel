<?php

class ArticuloModels extends Eloquent
{
		protected $table ="articulo";
		
		protected $fillable = array('titulo', 'description','etiquetas','imagen','leyenda');
}

?>