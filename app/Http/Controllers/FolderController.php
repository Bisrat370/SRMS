<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Folder;
use App\Models\Rack;
use App\Models\Shelf;


class FolderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rackk= Rack::get();

        $folders = Folder::get();
        return view('folder.index', compact('folders','rackk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $racks =Rack::get('racks')->select('id','name')->get();        
        // return view('profile_update',compact('profile_data','country_data'));

        $rackss = Rack::all();
        $shelvess = Shelf::all();

        $folders = Folder::all();
        return view('folder.create',compact('rackss','shelvess'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $folder = new Folder();
        $folder-> name = $request->input('name');
        $folder-> remark = $request->input('remark');
        $folder-> status = $request->input('status');
        $folder-> from = $request->input('from');
        $folder->to = $request->input('to');
        $folder->rack_id = $request->input('rack_id');
        $folder->shelf_id = $request->input('shelf_id');
        $folder->Save();
        $folders = Folder::get();
        return view('folder.index',compact('folders'));


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
    public function edit($id)
    {
        $rackss = Rack::all();
        $shelvess = Shelf::all();

        $folder = Folder::find($id);
        $folders = Folder::all();
        return view('folder.edit',['folders' => $folders,'rackss'=>$rackss,'shelvess'=>$shelvess,'folder'=>$folder,'layout'=>'edit']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
