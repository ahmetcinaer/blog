<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $categories=['Eğlence','Spor','Teknoloji','Finans','Bilişim','Sanat','Günlük Yaşam','Sağlık'];
        foreach($categories as $category){
            DB::table('categories')->insert([
                'name'=>$category,
                'slug'=>$slug=Str::slug($category),
                'created_at'=>now(),
                'updated_at'=>now()
            ]);
        }
    }
}
