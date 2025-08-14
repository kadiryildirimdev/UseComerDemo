<?php

namespace App\Http\Controllers;

use App\QuestionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function index(){
        $question = QuestionModel::Where('id',1)->FirstOrFail();
        return view('question',compact('question'));
    }

    public function getanswer(){
        $answeredquestion = QuestionModel::Where('id',request('questionid'))->FirstOrFail();
        $answer = request('answer');
        switch ($answeredquestion->id){
            case 1:
                if($answer == "Evet"){
                    $question = QuestionModel::Where('id',$answeredquestion->selectyes)->FirstOrFail();
                    return view('question',compact('question'));
                }else{
                    $question = QuestionModel::Where('id',$answeredquestion->selectno)->FirstOrFail();
                    return view('question',compact('question'));
                }
                break;
            case 2:
                if($answer == "Evet") {
                    return redirect()->route('result')->with('answer',$answeredquestion->id);
                }else{
                    $question = QuestionModel::Where('id',$answeredquestion->selectno)->FirstOrFail();
                    return view('question',compact('question'));
                }
                break;
            case 3:
                if($answer == "Evet") {
                    return redirect()->route('result')->with('answer',$answeredquestion->id);
                }else{
                    $question = QuestionModel::Where('id',$answeredquestion->selectno)->FirstOrFail();
                    return view('question',compact('question'));
                }
                break;
            case 4:
                if($answer == "Evet") {
                    return redirect()->route('result')->with('answer',$answeredquestion->id);
                }else{
                    $question = QuestionModel::Where('id',$answeredquestion->selectno)->FirstOrFail();
                    return view('question',compact('question'));
                }
                break;
        }

    }

    public function answer(){
        $answer = Session::get('answer');
        $question = QuestionModel::Where('id',$answer)->FirstOrFail();
        return view('result',compact('question'));
    }
}
