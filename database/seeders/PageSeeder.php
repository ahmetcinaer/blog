<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages=['Hakkımızda','Kariyer','Vizyonumuz','Misyonumuz'];
        $count=0;
        foreach($pages as $page){
            $count++;
            DB::table('pages')->insert([
                'title'=>$page,
                'slug'=>$slug=Str::slug($page),
                'image'=>fake()->imageUrl(800, 400,'dogs', true),
                'content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur veniam fugiat fuga distinctio molestias 
                 debitis eum nisi aliquid ab ea accusantium corrupti, quae sit alias assumenda recusandae error voluptatem blanditiis',
                'order'=>$count,
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
