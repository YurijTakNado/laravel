<?php

namespace App\Http\Controllers;

use App\Obj;
use Illuminate\Http\Request;

class ObjController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll(Request $request) {
        $data = $request->All();
        $objects = Obj::getAll($data);
        return json_encode($objects);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList(Request $request) {
        $data = $request->All();
        $objects = Obj::listAll($data);
        return json_encode($objects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

     /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $objects = Obj::show($id);
        return json_encode($objects);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obj  $obj
     * @return \Illuminate\Http\Response
     */
    public function edit(Obj $obj) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obj  $obj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obj $obj) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obj  $obj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obj $obj) {
        //
    }

}
