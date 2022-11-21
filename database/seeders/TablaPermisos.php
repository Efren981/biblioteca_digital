<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class TablaPermisos extends Seeder
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

            //opeaciones con libros

            'ver-libro',
            'crear-libro',
            'editar-libro',
            'borrar-libro',

            //permisos para usuario

            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',


            'ver-autor',
            'crear-autor',
            'editar-autor',
            'borrar-autor',

            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',

            'ver-editorial',
            'crear-editorial',
            'editar-editorial',
            'borrar-editorial',

            'ver-prestamo',
            'crear-prestamo',
            'editar-prestamo',
            'borrar-prestamo'
        ];

        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
