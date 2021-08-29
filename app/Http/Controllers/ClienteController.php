<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ClienteController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    

//aqui controlomamos el CRUD DE "NOTAS"
    
    public function inicio(Request $request){
       
     

      $nombre = $request->get('buscarpor');

      //$tipo = $request->get('tipo');

        $clientes = App\Clientes::where('nombre','like',"%$nombre%")->paginate(7);
        
        return view('welcome', compact('clientes'));






     /* if ($request){
         $query = trim($request->get($id:'search'));
        $clientes=App\clientes::where('name','LIKE','%'. $query .'%')
        ->orderby('id','asc');
        $request->get();
        return view ('welcome',compact('clientes','query'));
               
      } */
    }

    public function verPerfil($id){
       
       $clientes=App\users::findOrFail($id);
       return view ('clientes.verPerfil', compact('clientes'));

    }


     public function detalle($id){
       
       $clientes=App\clientes::findOrFail($id);
       return view ('clientes.detalle', compact('clientes'));

    }


   public function crear()//Request $request)
   {
        return view ('clientes.crear');

    

    }

 public function insert(Request $request){
       

        //return $request->all(); // request lee tu tabla su formato con sus campos
        //@csrf  //de la vista es seguridad de laravel para que otros sitios no clonen tu pagina genera un token

       $request->validate([ //seguimos aprovechando request en este caso para validar, y hacer que estos campos sean obligatorios.
            'nombre' => 'required',
            'apellido' => 'required',
            'fechaNac' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
        ]);

        $clienteNuevo = new App\clientes;   //crea un nuevo espacio con sus campos de NOTA
        $clienteNuevo->nombre = $request->nombre;  
        $clienteNuevo->apellido = $request->apellido;
        $clienteNuevo->fechaNac = $request->fechaNac;  
        $clienteNuevo->email = $request->email;  
        $clienteNuevo->direccion = $request->direccion;  
        $clienteNuevo->telefono = $request->telefono;  

        //creamos un objeto con sus campos nombre y descripcion 

        $clienteNuevo->save();   //save: esto es gracias a elocuent

        return back()->with('mensaje', 'Cliente agregado');  
        //back para, una vez agregada la nota, vuelve la pagina de atras. En este caso con un mensaje de afirmacion con la nota agregada.
    


    }

    public function editar($id){
       

       $cliente=App\clientes::findOrFail($id);
       return view ('clientes.editar', compact('cliente'));


    }

    public function update(Request $request, $id){

//UPDATE es quien realmente actualiza a traves de metodo PUT de la vista
 // usé la misma validacion que al "crear" para que, en el caso de EDITAR nuevamente el usuario coloque un BLANCO EN ALGUN CAMPO.
    	
        //------validacion: solamente voy a validar en el editar por si llegado caso, el usuario decide dejar blanco algun campo, éste lo debe ¡requerir!

    	$request->validate([			
    		'nombre' => 'required',
    		'apellido' => 'required',
             'fechaNac' => 'required',
            'email' => 'required',
            'direccion' => 'required',
            'telefono' => 'required'
		]);
    	//-------fin validacion
    	
    	$clienteActualizado = App\clientes::find($id);
        $clienteActualizado->id = $request->id;
    	$clienteActualizado->nombre = $request->nombre;
    	$clienteActualizado->apellido = $request->apellido;
        $clienteActualizado->fechaNac = $request->fechaNac;
        $clienteActualizado->email = $request->email;
        $clienteActualizado->direccion = $request->direccion;
        $clienteActualizado->telefono = $request->telefono;

    	$clienteActualizado->save();
    	return back()->with('mensaje', 'Cliente Actualizado!');

    }

    public function eliminar($id){

    $clienteEliminar = App\clientes::findOrFail($id);
    $clienteEliminar->delete();

    return back()->with('mensaje', 'Cliente Eliminado');
    }


    public function publicaciones(){
       

       return view ('clientes.publicaciones');


    }

}