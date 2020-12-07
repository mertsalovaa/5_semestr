<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TagsPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags_posts')->insert([
            'id_tag' => 1,
            'id_post' => 3
        ]);

        DB::table('tags_posts')->insert([
            'id_tag' => 2,
            'id_post' => 2
        ]);

        DB::table('tags_posts')->insert([
            'id_tag' => 3,
            'id_post' => 1
        ]);
    }
}
