<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->delete();
        
        for($i = 0; $i < 10; $i++){
        	\App\Models\Article::create([
        		'title' => 'title  ' . $i,
        		'body'  => 'body   ' . $i,
        		'user_id'=>1
        	]);
        }
    }
}
