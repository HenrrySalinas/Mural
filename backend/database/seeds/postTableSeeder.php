<?php

use Illuminate\Database\Seeder;

class postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//DB::table('posts')->delete();
    	//DB::table('posts')->truncate();
    	//DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		//DB::table('datapoints')->truncate();
		//DB::table('sensors')->truncate();
		//DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        factory(App\Post::class,1)->create();

       /* $user = factory(App\Persona::class,25)->create();
		$post = factory(App\Post::class,50)->create();
		$post->user()->associate($user);
		$post->save();*/
    }
}
