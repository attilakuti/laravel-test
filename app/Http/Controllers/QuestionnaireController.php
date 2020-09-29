<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use App\Models\Question;

class QuestionnaireController extends Controller
{
    // public function single(Questionnaire $questionnaire)
    // {
    //     $questionnaire contains our questionnaire object.
    // }

    public function show($slug)
    {
        
        $questionnaire = Questionnaire::where('slug', '=', $slug)->get();
        $questionnaire_name = $questionnaire[0]['name'];
        $questionnaire_id = $questionnaire[0]['id'];
        $questions = Question::where('questionnaire_id', '=', $questionnaire_id)->get();

        return view(
            'welcome', 
            [
                'questionnaire_id' => $questionnaire_id,
                'questionnaire_name' => $questionnaire_name,
                'questions' => $questions
            ]
        );

    }
   
}
