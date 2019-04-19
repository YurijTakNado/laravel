<?php

namespace App\Http\Controllers;

use App\Balcon;
use Illuminate\Http\Request;

class BalconController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getList() {
        $balcon = Balcon::listAll();
        dd($balcon);
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
     * @param  \App\Balcon  $balcon
     * @return \Illuminate\Http\Response
     */
    public function show(Balcon $balcon) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Balcon  $balcon
     * @return \Illuminate\Http\Response
     */
    public function edit(Balcon $balcon) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Balcon  $balcon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balcon $balcon) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Balcon  $balcon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balcon $balcon) {
        //
    }

}
