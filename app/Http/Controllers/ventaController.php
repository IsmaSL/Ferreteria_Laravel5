<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VentaFormRequest;
use App\Venta;
use App\DetalleVenta;
use DB;
use Auth;

class ventaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = DB::table('venta as v')
            ->join('contacto as c', 'v.id_cliente', '=', 'c.id_cliente')
            ->join('detalle_venta as dv', 'v.id_venta', '=', 'dv.id_venta')
            ->select('v.id_venta','v.tipo_venta','v.id_cliente','v.total_venta','v.estado','v.created_at', 'c.nombre', 'c.apellido_paterno', 'c.apellido_materno') 
            ->orderBy('v.id_venta', 'DESC')
            ->groupBy('v.id_venta','v.tipo_venta','v.id_cliente','v.total_venta','v.estado','v.created_at', 'c.nombre', 'c.apellido_paterno', 'c.apellido_materno')
            ->paginate(10);
            
        $clientes = DB::table('contacto')->select('id_cliente', 'nombre', 'apellido_paterno', 'apellido_materno', 'rfc', 'direccion')->orderBy('id_cliente', 'ASC')->get();
        $productos = DB::table('almacen')->select('id_producto', 'descripcion', 'existencia', 'precio_final')->orderBy('id_producto', 'ASC')->get();
        return view('user/ventas', ['ventas' => $ventas], ['clientes' => $clientes, 'productos' => $productos]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Reauth::user()->idsponse
     */
    public function create()
    {
    	/*
    	$clientes = DB::table('contacto')->select('id_cliente', 'nombre', 'apellido_paterno', 'apellido_materno', 'rfc', 'direccion')->get();
        $productos = DB::table('almacen')->select('id_producto', 'descripcion', 'precio_final')->get();
        return view('ventas/blanco', ['clientes' => $clientes], ['productos' => $productos]);
    	*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        DB::transaction(function () use ($request) {

            $venta = new Venta;
            $venta->id_cliente = $request->get('id_cliente');
            $venta->total_venta = $request->get('total_venta');
            $venta->tipo_venta = $request->get('tipo_venta');
            $venta->estado = $request->get('estado');
            $venta->save();

            $id_producto = $request->get('id_producto');
            $cantidad = $request->get('cantidad');
            $precio_venta_uni = $request->get('precio_unitario');
            $descuento = $request->get('descuento');
            $subtotal = $request->get('subtotal');
            $descripcion = $request->get('descripcion');

            $cont = 0;

            while ($cont < count($id_producto)) {
                $detalle = new DetalleVenta();
                $detalle->id_venta=$venta->id_venta;
                $detalle->id_producto=$id_producto[$cont];
                $detalle->cantidad=$cantidad[$cont];
                $detalle->precio_venta_uni=$precio_venta_uni[$cont];
                $detalle->id_producto=$id_producto[$cont];
                $detalle->descuento=$descuento[$cont];
                $detalle->subtotal=$subtotal[$cont];
                $detalle->descripcion=$descripcion[$cont];
                $detalle->save();
                $cont = $cont+1;
            }
        });
        return redirect()->back()->with('message', '');
        //return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = DB::table('venta as v')
            ->join('contacto as c', 'v.id_cliente', '=', 'c.id_cliente')
            ->join('detalle_venta as dv', 'v.id_venta', '=', 'dv.id_venta')
            ->select('v.id_venta','v.tipo_venta','v.id_cliente','v.total_venta','v.estado','v.created_at', 'c.nombre', 'c.apellido_paterno', 'c.apellido_materno', 'c.rfc', 'c.direccion', 'c.telefono') 
            ->where('v.id_venta',$id)
            ->first();

        $detalles = DB::table('detalle_venta')
            ->select('id_venta', 'cantidad', 'descripcion', 'precio_venta_uni', 'descuento','subtotal')
            ->where('id_venta',$id)
            ->get();

        return view('ventas.detalle', ['venta' => $venta, 'detalles'=>$detalles]);
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
         
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
    }
}