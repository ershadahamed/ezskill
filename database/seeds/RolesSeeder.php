<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * This to initiate the roles detailsupdated_at
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Calon',
            'short_name' => 'MY',
            'description' => 'Calon Persendirian',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => 'Jabatan Pembangunan Kemahiran',
            'short_name' => 'JPK',
            'description' => 'Kakitangan JPK / Admin',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => 'Admin',
            'short_name' => 'ADMIN',
            'description' => 'Super Administrator',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => 'PPL-PPT',
            'short_name' => 'CO',
            'description' => 'Jurulatih / Coach',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => 'PPL-PPL',
            'short_name' => 'PPL',
            'description' => 'Penyemak / Approval',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('roles')->insert([
            'name' => 'PB-PPT',
            'short_name' => 'PB',
            'description' => 'Badan Bertauliah Eg: SmartK',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
