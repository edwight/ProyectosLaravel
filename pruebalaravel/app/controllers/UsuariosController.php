<?php 
class UsuariosController extends BaseController {
 
    /**
     * Mustra la lista con todos los usuarios
     */
    public function mostrarUsuarios()
    {
        $usuarios = usuario::all(); 
        
        // Con el método all() le estamos pidiendo al modelo de Usuario
        // que busque todos los registros contenidos en esa tabla y los devuelva en un Array
        
        //return View::make('lista', 'usuarios',$usuarios);
        
        
        // El método make de la clase View indica cual vista vamos a mostrar al usuario 
        //y también pasa como parámetro los datos que queramos pasar a la vista. 
        // En este caso le estamos pasando un array con todos los usuarios
    }
    public function ajaxs()
    {
        $usuarios = usuario::all()->toJson();
       //return Response::json(array('name' => 'Steve', 'state' => 'CA')); 

      //return  Response::json(array('usuarios'=>$usuarios));
      //return Response::json(array(
      // array('name' => 'OR', 'category' => 'Logical', 'form_controls') => View::make('ajax'));
        //return Response::json( $usuarios );

      return View::make('ajax', array('usuarios' => $usuarios));
      //$sss= json_encode(array('Status' => 'Success'));
      //$arrayName = array('usuarios' => $sss, View::make('ajax'));
      //return Response::json($arrayName);

       // $html = View::make('ajax', $usuarios)-> render();
        //return Response::json(array('html' => $html));
       
       //$data = json_encode($usuarios);
       // return $data;

        //return Response::json(array(
        //'usuarios' =>  $usuarios));
        
    
    }

    public function postSave() 
    {
    $t = Input::all(); 
    return $t;
    }

  
}
?>