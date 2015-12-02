<?php

use Illuminate\Database\Seeder;

class comentarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comentario::class, 100)->create();
    }
}
