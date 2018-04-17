<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();
        DB::table('pages')->insert([
            'heading' => 'About Us',
            'content' => 'This is a content of about us page. Change it from admin panel',
            'slug' => 'about-us'
        ]);
    }
}
