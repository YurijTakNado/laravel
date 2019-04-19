<?php

namespace App\Http\Controllers;

use App\TypeObj;
use Illuminate\Http\Request;

class TypeObjController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList() {
        $typeObj = TypeObj::listAll();
        dd($typeObj);
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
     * @param  \App\TypeObj  $typeObj
     * @return \Illuminate\Http\Response
     */
    public function show(TypeObj $typeObj) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeObj  $typeObj
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeObj $typeObj) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeObj  $typeObj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeObj $typeObj) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeObj  $typeObj
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeObj $typeObj) {
        //
    }

}
