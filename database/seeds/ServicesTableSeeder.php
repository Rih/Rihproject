<?php

use Illuminate\Database\Seeder;
use \App\Website;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Website::class)->times(1000)->create();
        
    }
}
