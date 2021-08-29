<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    //permite que todo lo que se haga aqui este dentro del inicio de sesion
      public function __construct()
    {
        $this->middleware('auth');
    }
//aqui controlomamos el CRUD DE "NOTAS"
    

    public function inicio(){
       
       $notas=App\Nota::all();
       return view ('welcomeNotas',compact('notas'));

    }

    public function detalle($id){
       
       $nota=App\Nota::findOrFail($id);
       return view ('notas.detalle', compact('nota'));

    }

    public function crear(Request $request){
        // return $request->all(); request lee tu tabla su formato con sus campos
    	//@csrf  de la vista es seguridad de laravel para que otros sitios no clonen tu pagina genera un token

       $request->validate([				//seguimos aprovechando request en este caso para validar
    		'nombre' => 'required',
    		'descripcion' => 'required'
		]);

        $notaNueva = new App\Nota;   //crea un nuevo espacio con sus campos de NOTA
        $notaNueva->nombre = $request->nombre;  
        $notaNueva->descripcion = $request->descripcion;

		//creamos un objeto con sus campos nombre y descripcion	

        $notaNueva->save();   //save: esto es gracias a elocuent

        return back()->with('mensaje', 'Nota agregada');  //back para, una vez agregada la nota, vuelve la pagina de atras. En este caso con un mensaje de afirmacion con la nota agregada.

    }

    public function editar($id){
       

       $nota=App\Nota::findOrFail($id);
       return view ('notas.editar', compact('nota'));


    }

    public function update(Request $request, $id){

//UPDATE es quien realmente actualiza a traves de metodo PUT de la vista
 // usé la misma validacion que al "crear" para que, en el caso de EDITAR nuevamente el usuario coloque un BLANCO EN ALGUN CAMPO.
    	//------validacion
    	$request->validate([			
    		'nombre' => 'required',
    		'descripcion' => 'required'
		]);
    	//-------fin validacion
    	
    	$notaActualizada = App\Nota::find($id);
    	$notaActualizada->nombre = $request->nombre;
    	$notaActualizada->descripcion = $request->descripcion;
    	$notaActualizada->save();
    	return back()->with('mensaje', 'Nota editada!');

    }

    public function eliminar($id){

    $notaEliminar = App\Nota::findOrFail($id);
    $notaEliminar->delete();

    return back()->with('mensaje', 'Nota Eliminada');
   }
   

}
