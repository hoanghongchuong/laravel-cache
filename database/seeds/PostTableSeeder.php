<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Models\Post::class, 10)->create();
        for($i=0; $i< 100; $i++) {
        	DB::table('posts')->insert([
        		'user_id' => App\User::all()->random()->id,
        		'title' => 'Title'.$i.'-'.str_random(10),
        		'content' => 'Content'.$i.'-'.str_random(200),
        		'image' => '',
        		'created_at' => date('Y-m-d H:i:s'),
        		'updated_at' => date('Y-m-d H:i:s'),
        	]);
        }
    }
}
