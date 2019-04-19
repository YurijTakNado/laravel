<?php

namespace App\Http\Controllers;

use App\Microdistrict;
use Illuminate\Http\Request;

class MicrodistrictController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList($id) {
        $microdistricts = Microdistrict::listAll($id);
        dd($microdistricts);
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
     * @param  \App\Microdistrict  $microdistrict
     * @return \Illuminate\Http\Response
     */
    public function show(Microdistrict $microdistrict) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Microdistrict  $microdistrict
     * @return \Illuminate\Http\Response
     */
    public function edit(Microdistrict $microdistrict) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Microdistrict  $microdistrict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Microdistrict $microdistrict) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Microdistrict  $microdistrict
     * @return \Illuminate\Http\Response
     */
    public function destroy(Microdistrict $microdistrict) {
        //
    }

}
