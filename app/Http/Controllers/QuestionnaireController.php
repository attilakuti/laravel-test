<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionnaireController extends Controller
{
    // public function single(Questionnaire $questionnaire)
    // {
    //     $questionnaire contains our questionnaire object.
    // }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($slug)
    {
        
        $questionnaire = Questionnaire::where('slug', '=', $slug)->get();
        $questionnaire_name = $questionnaire[0]['name'];
        $questionnaire_id = $questionnaire[0]['id'];
        $questionnaire_slug = $questionnaire[0]['slug'];
        $questions = Question::where('questionnaire_id', '=', $questionnaire_id)->get();

        return view(
            'questionnaires/index', 
            [
                'questionnaire_id' => $questionnaire_id,
                'questionnaire_name' => $questionnaire_name,
                'questionnaire_slug' => $questionnaire_slug,
                'questions' => $questions
            ]
        );

    }

    public function store(Request $request) {

        $questionnaire_id = $request->input('questionnaire_id');
        $email = $request->input('email');
        $first_answer = $request->input('first_answer');
        $second_answer = $request->input('second_answer');
        $third_answer = $request->input('third_answer');
        $fourth_answer = $request->input('fourth_answer');

        DB::table('answers')->insert(
            [
                'questionnaire_id' => $questionnaire_id,
                'email' => $email ,
                'first_answer' => $first_answer,
                'second_answer' => $second_answer,
                'third_answer' => $third_answer,
                'fourth_answer' => $fourth_answer,
            ]
        );

        $inserted_answer = DB::table('answers')
                            ->orderBy('created_at', 'desc')
                            ->limit(1)
                            ->get();

        echo json_encode($inserted_answer);
        
    }
    
}
