<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'name'          => 'Контагент 1',
                'sum'           => '100',
                'department_id' => 1
            ],
            [
                'name'          => 'Контрагент 2',
                'sum'           => '150',
                'department_id' => 2
            ],
            [
                'name'          => 'Контрагент 3',
                'sum'           => '200',
                'department_id' => 2
            ],
            [
                'name'          => 'Контрагент 4',
                'sum'           => '250',
                'department_id' => 4
            ],
            [
                'name'          => 'Контрагент 5',
                'sum'           => '300',
                'department_id' => 4
            ],
            [
                'name'          => 'Контрагент 6',
                'sum'           => '350',
                'department_id' => 4
            ],
            [
                'name'          => 'Контрагент 7',
                'sum'           => '400',
                'department_id' => 4
            ],
            [
                'name'          => 'Контрагент 8',
                'sum'           => '450',
                'department_id' => 5
            ],
            [
                'name'          => 'Контрагент 9',
                'sum'           => '500',
                'department_id' => 5
            ],
            [
                'name'          => 'Контрагент 10',
                'sum'           => '50',
                'department_id' => 5
            ]
        ]);
    }
}
