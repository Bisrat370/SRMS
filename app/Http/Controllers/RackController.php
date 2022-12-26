<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rack;


class RackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $racks = Rack::get();
        return view('rack.index', compact('racks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $racks = Rack::all();
        return view('rack.create',['racks'=>$racks , 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $rack = new Rack();
        $rack-> Name = $request->input('Name');
        $rack-> Remark = $request->input('Remark');
        $rack-> status = $request->input('status');
        $rack->save();
        $racks = Rack::get();
        return view('rack.index', compact('racks'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rack= Rack::find($id);
        $racks= Rack::all();
        return view('rack.show',['racks' => $racks,'rack'=>$rack,'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rack = Rack::find($id);
        $racks = Rack::all();
        return view('rack.edit',['racks' => $racks,'rack'=>$rack,'layout'=>'edit']);

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
        $rack = Rack::find($id);
        $rack-> Name = $request->input('Name');
        $rack-> Remark = $request->input('Remark');     
        $rack-> status = $request->input('status');   
        $rack->save();
        $racks = Rack::get();
        return view('rack.index', compact('racks'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rack=Rack::find($id);
        $rack->delete();
        return redirect('/rack');
    }
}
