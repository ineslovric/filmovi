<?php

use Illuminate\Database\Seeder;

class FilmsTabSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$i = 0;
		
		while ($i < 50)
		{
			DB::table('films')->insert([
				'name' => str_random(10),
				'year' => date('Y-m-d'),
				'trajanje' => 90
			
			]);
			$i++;
		}
    }
}
