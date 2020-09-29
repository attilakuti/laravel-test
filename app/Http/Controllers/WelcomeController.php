<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;

class WelcomeController extends Controller
{
    public function index() {

        $questionnaires =  Questionnaire::all();

        return view(
            'welcome', 
            [
                'questionnaires' => $questionnaires
            ]
        );

    }
}
