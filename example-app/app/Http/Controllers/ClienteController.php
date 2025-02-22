<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClienteController extends Controller
{
    public function index(){
        //La funcion all selecciona todos los clientes de la base de datos
        $clientes = Cliente::all();
        //Se devuelve la vista y se compact la var de clientes
        return view('clientes.index',compact('clientes'));
    }

    public function destroy($id){
        //Se selecciona cliente de la bd
        $cliente = Cliente::find($id);
        //Se borra el cliente
        $cliente->delete();
        //Se redirecciona a clientes index(se vuelven a cargar los clientes) y Se muestra mensaje de exito
        return redirect()->route('clientes.index')->with('success','Cliente eliminado con exito');
    }

    public function edit($id){
        //Obtengo un cliente y miro si existe
        $cliente = Cliente::findOrFail($id);
        //Se va a la vista clientes.edit y se hace compact del cliente
        return view('clientes.edit',compact('cliente'));
    }

    public function update(Request $request,$id){

        $request -> validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255', 
            'telefono' => 'nullable|string|max:9',
            'direccion' => 'required|string|max:255',
        ]);

        //Se selecciona el cliente de la bd
        $cliente = Cliente::findOrFail($id);

        //Obtenemos los datos del request excepto la imagen
        $data = $request->except('imagen');

        //si el usuario ha introducido imagen en el formulario
        if($request->hasFile('imagen')){
            //Si el cliente a actualizar tiene una imagen
            if($cliente->imagen){
                //Borramos la imagen anterior
                Storage::disk('public')->delete($cliente->imagen);
            }

            //Definimos la ruta especifica de este cliente.

            $carpetacliente = 'imagenes/clientes' . $cliente->id . '/';

            //Guardamos la imagen en la carpeta del cliente y obtenemos la ruta completa

            $imagepath = $request->file('imagen')->store($carpetacliente,'public');

            //Pero data no tiene la imagen, hay que añadirla.

            $data['imagen'] = $imagepath;

        }

        //Se actualiza el cliente con los datos del request
        $cliente->update($data);
        //Se redirecciona a clientes index(se vuelven a cargar los clientes) y Se muestra mensaje de exito
        return redirect()->route('clientes.index')->with('success','Cliente actualizado con exito');
    }

    public function create(){
        return view('clientes.create');
    }

    public function insert(Request $request){

        $request -> validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255', 
            'telefono' => 'nullable|string|max:9',
            'direccion' => 'required|string|max:255',
        ]);

        //Creo un cliente con los datos del request excepto la imagen

        $cliente = Cliente::create($request->except('imagen'));


        if($request->hasFile('imagen')){

            //La ruta de la carpeta de cada cliente sera imagenes/clientes/idcliente
            $carpetacliente = 'imagenes/clientes' . $cliente->id . '/';

            //Guardo la imagen en la carpeta del cliente y obtenemos la ruta completa
            $imagepath = $request->file('imagen')->store($carpetacliente,'public');

            //Asigno la ruta de la imagen al cliente
            $cliente->imagen = $imagepath;
            $cliente->save();

            //Otra forma de actualizar un campo seria asi:
            //$cliente->update(['imagen' => $imagepath]);
            



        }
        
        return redirect()->route('clientes.index')->with('success','Cliente insertado con exito');  
    }

}
