<?php

namespace App\Http\Controllers;

use App\band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands=band::all();
        return view('band.index',compact('bands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('band.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$data=[
			'name' => $request -> Name,
			'vocalist' => $request -> Vocalist,
			'genre' => $request -> Genre,
			'since' => $request -> Since,
		];
		band::insert($data);
		return redirect ('band');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\band  $band
     * @return \Illuminate\Http\Response
     */
    public function show(band $band)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\band  $band
     * @return \Illuminate\Http\Response
     */
    public function edit(band $band)
    {
		//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\band  $band
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, band $band)
    {
		//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\band  $band
     * @return \Illuminate\Http\Response
     */
    public function destroy(band $band)
    {
        //
    }
}
