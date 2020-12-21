<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array();

        $cName = 'NoCategory';
        $categories[] = [
            'title' => $cName,
            'description' => 'Description',
            'parent_id' => 1,
            'slug' => $cName,
        ];

        for ($i = 1; $i <= 10; $i++) {
            $cName = 'Category' . ($i+1);
            $parentId = ($i > 4) ? rand(1 , 4) : 1;
            $description = 'Description'. ($i+1);

            $categories[] = [
                'title' => $cName,
                'description' => $description,
                'parent_id' => $parentId,
                'slug' => $cName,
            ];
        }

        \DB::table('blog_categories')->insert($categories);


    }
}
