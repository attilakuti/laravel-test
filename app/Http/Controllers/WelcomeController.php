<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;

class WelcomeController extends Controller
{
    // Get all questionnaire stored in the db and send them to the welcome view file
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
