<?php

use Illuminate\Database\Seeder;

class ProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $providers = [
                ['name' => 'Facebook','class' => 'fa-facebook','color' => 'blue'],
                ['name' => 'Twitter','class' => 'fa-twitter','color' => 'blue'],
                ['name' => 'Linkedin','class' => 'fa-linkedin','color' => 'blue'],
                ['name' => 'Youtube','class' => 'fa-youtube','color' => 'blue'],
                ['name' => 'Pinterest','class' => 'fa-pinterest','color' => 'blue'],
                ['name' => 'Dribbble','class' => 'fa-dribbble','color' => 'blue'],
        ];


        foreach ($providers as $provider){
            \Illuminate\Support\Facades\DB::table('providers')->insert([
                'name' => $provider['name'],
                'class' => $provider['class'],
                'color' => $provider['color'],
            ]);
        }

    }
}
