<?php

namespace App\Http\Controllers;

use App\Model\Draft;
use File;

class DraftController extends Controller
{
    public function getAll()
    {
        $drafts = Draft::all();
        var_dump($drafts);
        foreach ($drafts as $key => $draft){
           array_push($drafts[$key]=DraftImageController::getAllForDraftId($draft->id),$drafts);
        }

        return view('welcome')->with(compact('drafts'));
    }
}
