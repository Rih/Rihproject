<?php

use Illuminate\Database\Seeder;
use \App\Services;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Services::class)->times(1000)->create();
        
    }
}
