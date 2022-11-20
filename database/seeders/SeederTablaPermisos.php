<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos=[
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',

            'ver-catproducto',
            'crear-catproducto',
            'editar-catproducto',
            'borrar-catproductos',

            'ver-catinsumo',
            'crear-catinsumo',
            'editar-catinsumo',
            'borrar-catinsumo',

            'ver-unidadmedida',
            'crear-unidadmedida',
            'editar-unidadmedida',
            'borrar-unidadmedida',

            'ver-insumo',
            'crear-insumo',
            'editar-insumo',
            'borrar-insumo',

            'ver-producto',
            'crear-producto',
            'editar-producto',
            'borrar-producto',

            'ver-cliente',
            'crear-cliente',
            'editar-cliente',
            'borrar-cliente',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
