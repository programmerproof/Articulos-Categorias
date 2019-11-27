<?php

use Illuminate\Database\Seeder;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$vals[]= array('id' => 1, 'nombre' => 'Equipo Mayor o Instalaciones', 'fecha_creacion' => '2019-11-26', 'fecha_actualizacion' => '2019-11-26');
		$vals[]= array('id' => 2, 'nombre' => 'Equipo Accesorio o Accesorios de Equipamiento', 'fecha_creacion' => '2019-11-26', 'fecha_actualizacion' => '2019-11-26');
		$vals[]= array('id' => 3, 'nombre' => 'Materias Primas', 'fecha_creacion' => '2019-11-26', 'fecha_actualizacion' => '2019-11-26');
		$vals[]= array('id' => 4, 'nombre' => 'Componentes', 'fecha_creacion' => '2019-11-26', 'fecha_actualizacion' => '2019-11-26');
		$vals[]= array('id' => 5, 'nombre' => 'Materiales Procesados', 'fecha_creacion' => '2019-11-26', 'fecha_actualizacion' => '2019-11-26');
		$vals[]= array('id' => 6, 'nombre' => 'Suministros de Operación', 'fecha_creacion' => '2019-11-26', 'fecha_actualizacion' => '2019-11-26');
		$vals[]= array('id' => 7, 'nombre' => 'Servicios de los Negocios o Servicios a la Empresa', 'fecha_creacion' => '2019-11-26', 'fecha_actualizacion' => '2019-11-26');
		\DB::table('categoria')->insert($vals);
    }
	
    public function down()
    {
        \DB::table('categoria')->delete();
    }
}
