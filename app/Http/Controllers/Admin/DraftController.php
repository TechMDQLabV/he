<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Draft;
use App\Model\DraftImage;
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
        $draft->save();
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
        $draft->update($request->all());
        return redirect('/admin/drafts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $draftImage = DraftImage::where('draft_id','=',$id)->get();
        foreach ($draftImage as $image) {
           $image->delete();
        }
        //dd($draftImage);
        $draft = Draft::find($id)->first();
        //dd($draft);
        $draft->delete(); // DELETE
        return back();
    }
}
