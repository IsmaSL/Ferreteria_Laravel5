<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;


class almacenController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validacion(){
        request()->validate(['descripcion'=>'required|max:50',
                             'existencia'=>'required',
                             'precio_compra'=>'required',
                             'precio_venta_si'=>'required',
                             'impuesto'=>'required',
                             'precio_venta_ci'=>'required',
                             'ganancia'=>'required',
                             'punto_reorden'=>'required',
                             'id_proveedor'=>'required'
                        ]);
    }

    public function index()
    {
        $productos = DB::table('almacen')
            ->join('proveedor', 'almacen.id_proveedor', '=', 'proveedor.id_proveedor')
            ->select('almacen.*', 'proveedor.nombre', 'proveedor.apellido_paterno', 'proveedor.apellido_materno', 'proveedor.telefono')
            ->orderBy('almacen.id_producto', 'ASC')
            ->paginate(10);

        $proveedores = DB::table('proveedor')->select('id_proveedor', 'nombre', 'apellido_paterno', 'apellido_materno')->orderBy('id_proveedor', 'ASC')->get();
        
        return view('user/almacen', ['productos' => $productos], ['proveedores' => $proveedores]);
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
        $this->validacion();
        DB::table('almacen')->insert([
                                    'descripcion'=>$request->descripcion,
                                    'existencia'=>$request->existencia,
                                    'precio_compra'=>$request->precio_compra,
                                    'precio_venta_si'=>$request->precio_venta_si,
                                    'impuesto'=>$request->impuesto,
                                    'precio_venta_ci'=>$request->precio_venta_ci,
                                    'ganancia'=>$request->ganancia,
                                    'precio_final'=>$request->precio_final,
                                    'punto_reorden'=>$request->punto_reorden,
                                    'id_proveedor'=>$request->id_proveedor,
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
        DB::table('almacen')->where('id_producto',$id)
                            ->update([
                                    'descripcion'=>$request->descripcion,
                                    'existencia'=>$request->existencia,
                                    'precio_compra'=>$request->precio_compra,
                                    'precio_venta_si'=>$request->precio_venta_si,
                                    'impuesto'=>$request->impuesto,
                                    'precio_venta_ci'=>$request->precio_venta_ci,
                                    'ganancia'=>$request->ganancia,
                                    'precio_final'=>$request->precio_final,
                                    'punto_reorden'=>$request->punto_reorden,
                                    'id_proveedor'=>$request->id_proveedor,
                                    'updated_at'=>now()
                            ]);
        return redirect()->back()->with('message_ok', '');  
        //return $request."".$id;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        DB::transaction(function () use ($id) {
            DB::table('almacen')->where('id_producto',$id)->update(['id_proveedor'=>null]);
            DB::table('almacen')->where('id_producto',$id)->delete();
        });
        return redirect()->back()->with('delete', '');
    }
}