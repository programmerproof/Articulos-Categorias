<?php

namespace App\Http\Controllers;

use App\Articulo;
use Illuminate\Http\Request;
use App\Categoria;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$categoria = Categoria::select('id','nombre')->orderBy('nombre')->get();
		
		$action[] = (object)array('url' => 'articulo/save');
		$vars = $this->show();
		$vars += compact('action');
		return view('Articulo/Articulo', $vars)->with('categoria', $categoria);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function save(Request $request){ 
    	$categoria = Categoria::select('id','nombre')->orderBy('nombre')->get();
		$action[] = (object)array('url' => 'articulo/save');
		$data['numero_registro'] = $request->input('numero_registro');
		$data['articulo'] = $request->input('nombre');
		$data['cantidad'] = $request->input('cantidad');
		$data['categoria_id'] = $request->input('categoria_id');
		
		$registro = array();
		$numero_registro=\DB::select('SELECT numero_registro FROM articulo');
		foreach ( $numero_registro AS $reg ) { 
					 if( $data['numero_registro'] == $reg->numero_registro ){
						$registro[] = (object)array('numero' => $reg->numero_registro);
					 }
				    } 
							
		if( $registro == ''){			
		$category_id=\DB::select('SELECT MAX(id) AS id FROM articulo');
		   
		   foreach ( $articulo_id AS $id ) { 
					 $data['id']=($id->id+=1);
				    }		   
		   $date = strftime("%Y-%m-%d",time());
		   $data['fecha_creacion'] = $date;
		   
		   \DB::table('articulo')->insert(
							   [
							    'id' => $data['id'], 
								'numero_registro' => $data['numero_registro'],
								'nombre' => $data['articulo'],
								'cantidad' => $data['cantidad'],								
								'fecha_creacion' => $data['fecha_creacion'],
								'categoria_id' => $data['categoria_id'],
								]
							   );				
		
		$vars = $this->show();
		$vars += compact('action');
		$vars += compact('registro');
		return view('Articulo/Articulo', $vars)->with('categoria', $categoria);
		}else{
			$vars = $this->show();
			$vars += compact('action');
			$vars += compact('registro');
			return view('Articulo/Articulo', $vars)->with('categoria', $categoria); 
		}
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
		$articulo = \DB::select("SELECT a.id, a.numero_registro, a.nombre AS ARTICLE, a.cantidad, a.fecha_creacion, c.nombre AS CATEGORY
								  FROM articulo a
								  INNER JOIN categoria c ON a.categoria_id = c.id");
		return compact('articulo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        //
    }
}
