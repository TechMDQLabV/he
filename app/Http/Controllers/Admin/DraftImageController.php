<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Draft;
use App\Model\DraftImage;
use File;
class DraftImageController extends Controller
{

    public function index($id)
    {
        $draft = Draft::find($id);
        $images = $draft->images()->orderBy('featured','desc')->get();
        return view ('admin.drafts.images.index')->with(compact('draft','images'));
    }
    public function store(Request $request, $id)
    {
        $file = $request->file('photo');
    	$path = public_path() . '/images/drafts';
	    $fileName = uniqid() . $file->getClientOriginalName();
    	$moved = $file->move($path, $fileName);

    	// crear 1 registro en la tabla draft_image
    	if ($moved) {
	    	$draftImage = new DraftImage();
	    	$draftImage->image = $fileName;
	    	$draftImage->draft_id = $id;
	    	$draftImage->save(); // INSERT
        }
        return back();
    }

    public function destroy(Request $request)
    {
    	// eliminar el archivo
    	$draftImage = DraftImage::find($request->image_id);
    	if (substr($draftImage->image, 0, 4) === "http") {
    		$deleted = true;
    	} else {
    		$fullPath = public_path().'/images/drafts/'.$draftImage->image;
    		$deleted = File::delete($fullPath);
    	}

    	// eliminar el registro de la img en la bd
    	if ($deleted) {
    		$draftImage->delete();
    	}

    	return back();
    }

    public function select($id, $image)
    {
        DraftImageController::where('draft_id', $id)->update([
            'featured' => false
        ]);

        $draftImage = DraftImage::find($image);
        $draftImage->featured = true;
        $draftImage->save();

        return back();
    }
}
