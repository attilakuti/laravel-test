<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            ['questionnaire_id' => 1, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 1],
            ['questionnaire_id' => 1, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 2],
            ['questionnaire_id' => 1, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 3],
            ['questionnaire_id' => 1, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 4],
            ['questionnaire_id' => 2, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 5],
            ['questionnaire_id' => 2, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 6],
            ['questionnaire_id' => 2, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 7],
            ['questionnaire_id' => 2, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 8],
            ['questionnaire_id' => 3, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 9],
            ['questionnaire_id' => 3, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 10],
            ['questionnaire_id' => 3, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 11],
            ['questionnaire_id' => 3, 'question' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit?", 'order_key' => 12],
        ]);
    }
}
