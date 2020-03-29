<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'       => 'Aplicativos & Software',
             'slug'     => 'aplicativos-software',
	        'description' => 'Postagem teste com seeds',
        ]);

        DB::table('categories')->insert([
            'name'       => 'Engenharia de Software',
            'slug'     => 'engenharia-software',
	        'description' => 'Postagem teste com seeds',
        ]);

        DB::table('categories')->insert([
            'name'       => 'Programação',
            'slug'     => 'programacao',
	        'description' => 'Postagem teste com seeds',
        ]);

        DB::table('categories')->insert([
            'name'       => 'Design',
            'slug'     => 'design',
	        'description' => 'Postagem teste com seeds',
        ]);

        DB::table('categories')->insert([
            'name'       => 'Mobile',
            'slug'     => 'mobile',
	        'description' => 'Postagem teste com seeds',
        ]);

        DB::table('categories')->insert([
            'name'       => 'Redes & Segurança',
            'slug'     => 'redes-seguranca',
	        'description' => 'Postagem teste com seeds',
        ]);
	   // factory(\App\Post::class, 30)->create();
    }
}
