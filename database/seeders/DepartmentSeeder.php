<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'name' => 'Отдел А'
            ],
            [
                'name' => 'Отдел Б'
            ],
            [
                'name' => 'Отдел В'
            ],
            [
                'name' => 'Отдел Г'
            ],
            [
                'name' => 'Отдел Д'
            ],
        ]);
    }
}
