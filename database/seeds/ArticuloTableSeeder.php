<?php

use Illuminate\Database\Seeder;

class ArticuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $at=strftime("%Y-%m-%d %H:%M:%S",time());
		$vals[]= array('id' => 1, 'numero_registro' => '001', 'nombre' => 'bujías', 'cantidad' => 5, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 4);
		$vals[]= array('id' => 2, 'numero_registro' => '002', 'nombre' => 'llantas', 'cantidad' => 15, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 4);
		$vals[]= array('id' => 3, 'numero_registro' => '003', 'nombre' => 'motores eléctricos', 'cantidad' => 8, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 4);
		
		$vals[]= array('id' => 4, 'numero_registro' => '004', 'nombre' => 'lámina metálica', 'cantidad' => 2, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 5);
		$vals[]= array('id' => 5, 'numero_registro' => '005', 'nombre' => 'materias químicas', 'cantidad' => 7, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 5);
		$vals[]= array('id' => 6, 'numero_registro' => '006', 'nombre' => 'aceros especiales', 'cantidad' => 10, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 5);
		$vals[]= array('id' => 7, 'numero_registro' => '007', 'nombre' => 'maderas', 'cantidad' => 1, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 5);
		$vals[]= array('id' => 8, 'numero_registro' => '008', 'nombre' => 'jarabe de maíz y plásticos', 'cantidad' => 3, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 5);
		
		$vals[]= array('id' => 9, 'numero_registro' => '009', 'nombre' => 'lubricantes', 'cantidad' => 2, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 6);
		$vals[]= array('id' => 10, 'numero_registro' => '010', 'nombre' => 'carbón', 'cantidad' => 7, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 6);
		$vals[]= array('id' => 11, 'numero_registro' => '011', 'nombre' => 'papel para escribir a máquina', 'cantidad' => 10, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 6);
		$vals[]= array('id' => 12, 'numero_registro' => '012', 'nombre' => 'lapiceros', 'cantidad' => 1, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 6);
		
		$vals[]= array('id' => 13, 'numero_registro' => '013', 'nombre' => 'limpieza de cristales', 'cantidad' => 1, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 7);
		$vals[]= array('id' => 14, 'numero_registro' => '014', 'nombre' => 'reparación de máquinas de escribir', 'cantidad' => 40, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 7);
		
		$vals[]= array('id' => 15, 'numero_registro' => '015', 'nombre' => 'minerales', 'cantidad' => 10, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 3);
		$vals[]= array('id' => 16, 'numero_registro' => '016', 'nombre' => 'suelos y productos del bosque y del mar', 'cantidad' => 5, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 3);
		
		$vals[]= array('id' => 17, 'numero_registro' => '017', 'nombre' => 'mesas de oficina', 'cantidad' => 3, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 2);
		$vals[]= array('id' => 18, 'numero_registro' => '018', 'nombre' => 'máquinas de escribir', 'cantidad' => 3, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 2);
		
		$vals[]= array('id' => 19, 'numero_registro' => '019', 'nombre' => 'computadoras principales', 'cantidad' => 5, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 1);
		$vals[]= array('id' => 20, 'numero_registro' => '020', 'nombre' => 'altos hornos', 'cantidad' => 7, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 1);
		$vals[]= array('id' => 21, 'numero_registro' => '021', 'nombre' => 'generadores', 'cantidad' => 8, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 1);
		$vals[]= array('id' => 22, 'numero_registro' => '022', 'nombre' => 'aviones', 'cantidad' => 10, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 1);
		$vals[]= array('id' => 23, 'numero_registro' => '023', 'nombre' => 'edificios', 'cantidad' => 30, 'fecha_creacion' => '2019-11-26', 'categoria_id' => 1);
		\DB::table('articulo')->insert($vals);
    }

    public function down()
    {
        \DB::table('articulo')->delete();
    }
}
