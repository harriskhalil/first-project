<?php

use Illuminate\Database\Seeder;

class ArticleTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title'=>'How to Test Responsive Web Design Cross-Browser Compatibility',
                'slug'=>'What is Responsive Design, and how does it work?',
                'description'=>'Responsive Design allows websites to '.'adapt to multiple screen sizes while maintaining usability and user experience. Depending on the viewport, text, UI elements, and photos, rescale and resize.'
            ],
            [
                'title'=>'harris',
                'slug'=>'this is the slug',
                'description'=>'this is the discription',
            ]
        ]);
    }
}
