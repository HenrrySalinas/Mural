<?php

use Illuminate\Database\Seeder;

class personaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//DB::table('posts')->delete();
    	//DB::table('personas')->truncate();
    	factory(App\Persona::class)->create([
        	'nombre' => "Henrry",
        	'paterno' => "Salinas",
        	'materno' => "Humerez",
        	'email' => "000@hihi.com",
        	]);

        /*factory(App\Persona::class, 25)->create();*/
        
    }
}
