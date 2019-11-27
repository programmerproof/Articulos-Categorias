<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
	
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$action[] = (object)array('url' => 'categoria/save');
		$vars = $this->show();
		$vars += compact('action');
		return view('Categoria/Categoria', $vars);
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
    	$action[] = (object)array('url' => 'categoria/save');
		$data['categoria'] = $request->input('nombre');
		$category_id=\DB::select('SELECT MAX(id) AS id FROM categoria');
		   
		   foreach ( $category_id AS $id ) { 
					 $data['id']=($id->id+=1);
				    }		   
		   $date = strftime("%Y-%m-%d",time());
		   $data['fecha_creacion'] = $date;
		   
		   \DB::table('categoria')->insert(
							   [
							    'id' => $data['id'], 
								'nombre' => $data['categoria'], 
								'fecha_creacion' => $data['fecha_creacion'],
								'fecha_actualizacion' => null,
								]
							   );				
		
		$vars = $this->show();
		$vars += compact('action');
		return view('Categoria/Categoria', $vars);
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
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
		$categoria = \DB::select("SELECT c.id, c.nombre, c.fecha_creacion, c.fecha_actualizacion 
								  FROM categoria c");
		return compact('categoria');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        //
		$action[] = (object)array('url' => 'categoria/edit/'. $id);
		$data['categoria'] = $request->input('nombre');
		$date = strftime("%Y-%m-%d %H:%M:%S",time());
		$data['fecha_actualizacion'] = $date;
		$values=array('nombre'=>$data['categoria'],
				    'fecha_actualizacion'=>$data['fecha_actualizacion']);
		$vals = \DB::table('categoria')
				            ->where('id', $id)
				            ->update($values);
		$vars = $this->show();
		$vars += compact('action');
		return view('Categoria/Categoria', $vars);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
		$action[] = (object)array('url' => 'categoria/edit/'. $id);
		$search = \DB::select('SELECT c.nombre 
								  FROM categoria c
								  WHERE c.id=\''.$id.'\'');
		$vars = compact('search');
		$vars += $this->show();
		$vars += compact('action');
		return view('Categoria/Categoria', $vars);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        //
    }
	
}
