<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /*
      Run the database seeds.
     
      @return void
    */
     
    public function run()
    {
       /* 
        DB::table('users')->insert([
            'title' => '命名の心得',
            'body' => '命名はデータを基準に考える'
        ]);
    }
    */
    
    factory(App\Post::class, 10)->create();

}
}
