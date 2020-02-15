<?php

namespace App\Http\Controllers;

use App\Model\Draft;
use File;

class DraftImageController extends Controller
{
    public function getAllForDraftId($id)
    {
        $draft = Draft::find($id);
        return $draft->images()->orderBy('featured','desc')->get();
    }
}
