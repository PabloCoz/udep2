<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Ver Dashboard', /* 1 */
        ]);

        Permission::create([
            'name' => 'Crear Role', /* 2 */
        ]);

        Permission::create([
            'name' => 'Listar Role', /* 3 */
        ]);

        Permission::create([
            'name' => 'Editar Role', /* 4 */
        ]);

        Permission::create([
            'name' => 'Eliminar Role', /* 5 */
        ]);

        Permission::create([
            'name' => 'Listar Usuarios', /* 6 */
        ]);

        Permission::create([
            'name' => 'Editar Usuarios', /* 7 */
        ]);

        Permission::create([
            'name' => 'Listar Examen', /* 8 */
        ]);

        Permission::create([
            'name' => 'Crear Examen' /* 9 */
        ]);

        Permission::create([
            'name' => 'Editar Examen' /* 10 */
        ]);

        Permission::create([
            'name' => 'Eliminar Examen' /* 11 */
        ]);

        Permission::create([
            'name' => 'Ver Respuestas' /* 12 */
        ]);
    }
}
