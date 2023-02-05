<?php

namespace App\Http\Controllers;

use App\Models\soundCate;
use App\Http\Requests\StoresoundCateRequest;
use App\Http\Requests\UpdatesoundCateRequest;

class SoundCateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresoundCateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresoundCateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\soundCate  $soundCate
     * @return \Illuminate\Http\Response
     */
    public function show(soundCate $soundCate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\soundCate  $soundCate
     * @return \Illuminate\Http\Response
     */
    public function edit(soundCate $soundCate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesoundCateRequest  $request
     * @param  \App\Models\soundCate  $soundCate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesoundCateRequest $request, soundCate $soundCate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\soundCate  $soundCate
     * @return \Illuminate\Http\Response
     */
    public function destroy(soundCate $soundCate)
    {
        //
    }
}
