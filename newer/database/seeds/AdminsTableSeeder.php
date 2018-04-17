<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'first_name' => 'Met',
            'last_name' => 'IP',
            'email' => 'admin@metip.com',
            'password' => bcrypt('123456'),
            'role_id'=>1,
            'status'=>'1'
        ]);
    }
}
