<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'permission' => 'Crear usuario',
        ]);
        DB::table('permissions')->insert([
            'permission' => 'Editar usuario',
        ]);
        DB::table('permissions')->insert([
            'permission' => 'Ver usuario',
        ]);
        DB::table('permissions')->insert([
            'permission' => 'Borrar usuario',
        ]);
    }
}
