<?php

namespace App\Http\Controllers;

use App\TypeSeller;
use Illuminate\Http\Request;

class TypeSellerController extends Controller {

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList() {
        $typeSeller = TypeSeller::listAll();
        dd($typeSeller);
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
     * @param  \App\TypeSeller  $typeSeller
     * @return \Illuminate\Http\Response
     */
    public function show(TypeSeller $typeSeller) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeSeller  $typeSeller
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeSeller $typeSeller) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeSeller  $typeSeller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeSeller $typeSeller) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeSeller  $typeSeller
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeSeller $typeSeller) {
        //
    }

}
