<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionnaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaires')->insert([
            ['name' => "Questionnaire 1", 'slug' => "questionnaire-1"],
            ['name' => "Questionnaire 2", 'slug' => "questionnaire-2"],
            ['name' => "Questionnaire 3", 'slug' => "questionnaire-3"]
        ]);
    }
}
