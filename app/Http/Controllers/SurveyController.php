<?php

namespace App\Http\Controllers;

use App\Question;
use App\Option;
use App\Answer;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //display all of the question
    public function index()
    {
        $questions = Question::firstorFail()->get();
        $options = Option::firstorFail()->get();
        
        return View('surveyform', [
            'questions' => $questions,
            'options' => $options]);
    }

    public function store(Request $request)
    {
        $surveyRequest = $request->except('_token');
        //ddd($test);
        
        foreach($surveyRequest as $question_id => $option_id)
        {
            $surveyRequest = new Answer();
            $surveyRequest->questions_id = $question_id;
            $surveyRequest->options_id = $option_id;
            $surveyRequest->save(); 
        }

        /*
        $surveyRequest = new Answer();
        $surveyRequest->questions_id = $attributes[1];
        $surveyRequest->options_id = $value[1];
        $surveyRequest->save(); 
        $surveyRequest = new Answer();
        $surveyRequest->questions_id = $attributes[2];
        $surveyRequest->options_id = $value[2];
        $surveyRequest->save(); 
        $surveyRequest = new Answer();
        $surveyRequest->questions_id = $attributes[3];
        $surveyRequest->options_id = $value[3];
        $surveyRequest->save(); 
        $surveyRequest = new Answer();
        $surveyRequest->questions_id = $attributes[4];
        $surveyRequest->options_id = $value[4];
        $surveyRequest->save();
        */
        
        return redirect(route('result'));

    }

    public function result()
    {
        $totalAgeBelow18 = Answer::where('questions_id',1)->where('options_id',1)->count();
        $totalAgeBelow35 = Answer::where('questions_id',1)->where('options_id',2)->count();
        $totalAgeBelow60 = Answer::where('questions_id',1)->where('options_id',3)->count();
        $totalAgeAbove60 = Answer::where('questions_id',1)->where('options_id',4)->count();
        $totalSecondaryLevel = Answer::where('questions_id',2)->where('options_id',1)->count();
        $totalDiplomaLevel = Answer::where('questions_id',2)->where('options_id',2)->count();
        $totalDegreeLevel = Answer::where('questions_id',2)->where('options_id',3)->count();
        $totalPostGraduateLevel = Answer::where('questions_id',2)->where('options_id',4)->count();
        $totalIncomeBelow1000 = Answer::where('questions_id',3)->where('options_id',1)->count();
        $totalIncomeBelow3000 = Answer::where('questions_id',3)->where('options_id',2)->count();
        $totalIncomeBelow5000 = Answer::where('questions_id',3)->where('options_id',3)->count();
        $totalIncomeAbove5000 = Answer::where('questions_id',3)->where('options_id',4)->count();
        $totalGenderMale = Answer::where('questions_id',4)->where('options_id',1)->count();
        $totalGenderFemale = Answer::where('questions_id',4)->where('options_id',2)->count();
        //dd($totalGender);
        return view('resultSurvey', 
            [
                'totalAgeBelow18'=>$totalAgeBelow18,
                'totalAgeBelow35'=>$totalAgeBelow35,
                'totalAgeBelow60'=>$totalAgeBelow60,
                'totalAgeAbove60'=>$totalAgeAbove60,
                'totalSecondaryLevel'=>$totalSecondaryLevel,
                'totalDiplomaLevel'=>$totalDiplomaLevel,
                'totalDegreeLevel'=>$totalDegreeLevel,
                'totalPostGraduateLevel'=>$totalPostGraduateLevel,
                'totalIncomeBelow1000'=>$totalIncomeBelow1000,
                'totalIncomeBelow3000'=>$totalIncomeBelow3000,
                'totalIncomeBelow5000'=>$totalIncomeBelow5000,
                'totalIncomeAbove5000'=>$totalIncomeAbove5000,
                'totalGenderMale'=>$totalGenderMale,
                'totalGenderFemale'=>$totalGenderFemale
            ]);    
    }
}
