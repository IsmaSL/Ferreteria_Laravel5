<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;
use DB;
use Auth;

class contactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactos = DB::table('contacto')->orderBy('id_cliente', 'ASC')->paginate(10);
        return view('user/contactos', ['contactos' => $contactos]);
    }

    public function validacion(){
        request()->validate(['nombre'=>'required|max:50',
                             'apellido_paterno'=>'required|max:100',
                             'apellido_materno'=>'required|max:100',
                             'rfc'=>'required|max:13',
                             'telefono'=>'required|max:11',
                             'direccion'=>'required|max:100',
                             'email'=>'required|email|max:100'
                        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Reauth::user()->idsponse
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Parte de query builder

        $this->validacion();
        DB::table('contacto')->insert([
                                    'nombre'=>$request->nombre,
                                    'apellido_paterno'=>$request->apellido_paterno,
                                    'apellido_materno'=>$request->apellido_materno,
                                    'rfc'=>$request->rfc,
                                    'direccion'=>$request->direccion,
                                    'telefono'=>$request->telefono,
                                    'email'=>$request->email,
                                    'created_at'=>now(),
                                    'updated_at'=>now()
                                ]);
        return redirect()->back()->with('message', '');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        //
    }
    /*

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        DB::table('contacto')->where('id_cliente',$id)
                            ->update([
                                'nombre'=>$request->nombre,
                                'apellido_paterno'=>$request->apellido_paterno,
                                'apellido_materno'=>$request->apellido_materno,
                                'rfc'=>$request->rfc,
                                'direccion'=>$request->direccion,
                                'telefono'=>$request->telefono,
                                'email'=>$request->email,
                                'updated_at'=>now()
                            ]);

        return redirect()->back()->with('message_ok', '');   
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        DB::table('contacto')->where('id_cliente',$id)
                             ->delete();
        return redirect()->back()->with('delete', '');
    }
}
