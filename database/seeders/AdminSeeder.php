<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apr_admin')->insert([
            'name' => 'Apni Roti Admin',
            'email' => 'distributor@gmail.com',
            'password' => md5('India@123'),
        ]);
    }
}
