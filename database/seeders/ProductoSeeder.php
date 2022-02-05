<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

# Importamos DB
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('productos')->insert([
            [
                'descripcion' => 'Coca cola',
                'cantidad' => 40,
                'created_at' => '2022-02-05 00:38:00',
                'updated_at' => '2022-02-05 00:38:00'
            ],
            [
                'descripcion' => 'Cerveza Quilmes',
                'cantidad' => 40,
                'created_at' => '2022-02-05 00:38:00',
                'updated_at' => '2022-02-05 00:38:00'
            ],
            [
                'descripcion' => 'Vino',
                'cantidad' => 35,
                'created_at' => '2022-02-05 00:38:00',
                'updated_at' => '2022-02-05 00:38:00'
            ],
            [
                'descripcion' => 'Manteca Serenisima',
                'cantidad' => 50,
                'created_at' => '2022-02-05 00:38:00',
                'updated_at' => '2022-02-05 00:38:00'
            ],
            [
                'descripcion' => 'Queso cremoso',
                'cantidad' => 50,
                'created_at' => '2022-02-05 00:38:00',
                'updated_at' => '2022-02-05 00:38:00'
            ]
        ]);
    }
}
