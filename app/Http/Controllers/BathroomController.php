<?php

namespace App\Http\Controllers;

use App\Bathroom;
use Illuminate\Http\Request;

class BathroomController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList() {
        $bathroom = Bathroom::listAll();
        dd($bathroom);
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
     * @param  \App\Bathroom  $bathroom
     * @return \Illuminate\Http\Response
     */
    public function show(Bathroom $bathroom) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bathroom  $bathroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Bathroom $bathroom) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bathroom  $bathroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bathroom $bathroom) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bathroom  $bathroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bathroom $bathroom) {
        //
    }

}
