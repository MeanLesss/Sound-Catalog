<?php

namespace App\Http\Controllers;

use App\Models\Sound;
use App\Models\User;
use Illuminate\Http\Request;

class SoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sounds = Sound::select('sounds.*', 'u.name')
        ->join('users as u', 'sounds.userId', '=', 'u.id')
        ->where('sounds.statusApprove',-1)
        ->get();
        //return var_dump($sounds);
        return view('Sound.index',['sounds' => $sounds]);

    }
    public function SearchSound(Request $request)
    {
        //
        $sounds = Sound::select('sounds.*', 'u.name')
        ->join('users as u', 'sounds.userId', '=', 'u.id')
        ->where('sounds.statusApprove', -1)
        ->where('sounds.title', 'like', '%' . $request->inputSearch . '%')
        ->get();
        //return var_dump($sounds);
        return view('Sound.index',['sounds' => $sounds]);

    }

    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
