<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function inicio(){
        $nota = App\Nota::paginate(2);

        return view('welcome',compact('nota'));
    }

    public function detalle($id){

        $dato = App\Nota::findOrFail($id);
        return view('detalle',compact('dato'));
    }

    public function crear(Request $request){

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        //nom base de dato el request lo que vienes del form
        $crearNota = new App\Nota;
        $crearNota->nombre = $request->nombre;
        $crearNota->descripcion = $request->descripcion;

        $crearNota->save();

        return back();
        //return $request->all();
    }

    public function editar($id){

        $edit = App\Nota::findOrFail($id);
        return View('editar', compact('edit'));
    }

    public function update(Request $request, $id){

        $notaupdate = App\Nota::find($id);
        $notaupdate->nombre = $request->nombre;
        $notaupdate->descripcion = $request->descripcion;

        $notaupdate->save();

        return back()->with('mensaje', 'Nota editada!');

    }

    public function delete($id){
        $del = App\Nota::findOrFail($id);
        $del->delete();
        return back()->with('mensaje', 'Nota Eliminada!');

    }

    public function foto()
    {
        $foto = ['foto 1', 'foto 2', 'foto 3'];

        //eturn view('fotos',['foto'=>$foto]);
        return view('fotos', compact('foto'));
    }

    public function blog()
    {
        return View('blog');
    }
}
