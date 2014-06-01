<?php

class ArticuloController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		
		
		//$Articulo = ArticuloModels::paginate(5);
		//return View::make('admin.ListaPosts', array('Articulo'=>$Articulo)); 
		$Articulo = ArticuloModels::orderBy('id', 'DESC')->paginate(5);
		return View::make('admin.index', array('Articulo'=>$Articulo)); 
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	

		
		return View::make('admin.form');
		/*  return View::make('admin.CreatePosts'); */
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$file=Input::file('imagen');
		//getClientOriginalName(); nombre del archivo
		$name = Input::file('imagen')->getClientOriginalName();

		$titulo = Input::get('titulo');
		$leyenda = Input::get('leyenda');
		$etiquetas = Input::get('etiquetas');
		$description = Input::get('description');
		$imagen = 'img/imgs/'. $name;
		$input= array(
			'titulo' => $titulo,
			'leyenda'=>$leyenda,
			'description'=> $description,
			'etiquetas'=>$etiquetas,
			'imagen'=>$imagen 
			);
		ArticuloModels::create($input);

		if (Input::file('imagen')->isValid())	
		{
			Input::file('imagen')->move('img/imgs',$name);
		 	
		}


    	return Redirect::to('admin');

		
/**
    	$file=Input::file('imagen');
	   	if (Input::file('imagen')->isValid())
		{
			$name = Input::file('imagen')->getClientOriginalName();
			$upload_success = Input::file('imagen')->move('img/imgs',$name);
		 	if( $upload_success ) {
		   		return Response::json('success', 200);
			} else {
		   		return Response::json('error', 400);
			}
		}
**/
    	/**
	   $file=Input::file('imagen');
	   if (Input::file('imagen')->isValid())
		{
			$name = Input::file('imagen')->getClientOriginalName();
			$upload_success= Input::file('imagen')->move('img/imgs',$name);
		    if( $upload_success ) {
		   		return Response::json('success', 200);
			} else {
		   		return Response::json('error', 400);
			}
		}
		**/

	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
		$articulo = ArticuloModels::find($id);

		return View::make('admin.detalles', array('articulo'=>$articulo));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return 'edit '.$id;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'update '.$id;
		//http://localhost/laravel/edwight/public/admin/update
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
		/*
		$nerd = Nerd::find($id);
		$nerd->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the nerd!');
		return Redirect::to('nerds');

		http://localhost/laravel/edwight/public/admin/delete
		*/
	}


}
