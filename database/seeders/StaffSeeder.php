<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Staff::create([
        //     'nip' => '0123456789',
        //     'email' => 'angel@gmail.com',
        //     'nama' => 'angel',
        //     'tanggal_lahir' => '2005-08-04',
        //     'no_hp' => '085261079546'
        // ]);

        Staff::factory(8)->create();
    }
}
