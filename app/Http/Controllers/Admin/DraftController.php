<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Draft;
use File;

class DraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $drafts = Draft::all();
        
        //return view('admin.drafts.index');
        return view('admin.drafts.index')->with(compact('drafts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "hola";
        return view('admin.drafts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, Draft::$rules, Draft::$messages);
        $draft = Draft::create($request->only('title', 'description'));

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path() . '/images/drafts';
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);
            
            // update draft
            if ($moved) {
                $draft->image = $fileName;
                $draft->save(); // UPDATE
            }
        }
        return redirect('/admin/drafts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Draft $draft)
    {
        return view('admin.drafts.edit')->with(compact('draft'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Draft $draft)
    {
        
        $this->validate($request, Draft::$rules, Draft::$messages);

        $draft->update($request->only('title', 'description'));
        //dd($draft);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = public_path() . '/images/drafts';
            $fileName = uniqid() . '-' . $file->getClientOriginalName();
            $moved = $file->move($path, $fileName);

            if ($moved) {
                $previousPath = $path . '/' . $draft->image;

                $draft->image = $fileName;
                $saved = $draft->save(); // UPDATE

                if ($saved)
                    File::delete($previousPath);
            } 
        } 
        return redirect('/admin/drafts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Draft $draft)
    {
        $category->delete(); // DELETE
        return back();
    }
}
