<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => 'Jhon Does',
            'email' => 'JhonDoes@gmail.com',
            'telefone' => '(00)94002-8922',
            'dt_nascimento' => '2004-09-21',
        ]);

        DB::table('contacts')->insert([
            'name' => 'Jane Does',
            'email' => 'JaneDoes@gmail.com',
            'telefone' => '(00)94002-8922',
            'dt_nascimento' => '2000-01-01',
        ]);
    }
}
