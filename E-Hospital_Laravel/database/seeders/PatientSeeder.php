<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Patient::factory()->create([
            'id'=>'1',
        'pname'=>'Jannatul Nusrat',
        'dob'=>'04/19/2000',
        'email'=>'jannat@gmail.com',
        'phone'=>'0182927354',
        'password'=>'1234',

        ]);
        
    }
}
