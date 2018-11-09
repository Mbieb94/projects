<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'Testing1',
        	'slug' => str_slug('testing1')
        ]);

        Category::create([
        	'name' => 'Testing2',
        	'slug' => str_slug('testing2')
        ]);
    }
}
