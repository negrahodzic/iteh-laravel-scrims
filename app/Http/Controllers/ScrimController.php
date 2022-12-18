<?php

namespace App\Http\Controllers;

use App\Http\Resources\ScrimCollection;
use App\Http\Resources\ScrimResource;
use App\Models\Scrim;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ScrimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(new ScrimCollection(Scrim::all()), Response::HTTP_OK);
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
     * @param  \App\Models\Scrim  $scrim
     * @return \Illuminate\Http\Response
     */
    public function show(Scrim $scrim)
    {
        return new ScrimResource($scrim);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scrim  $scrim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scrim $scrim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scrim  $scrim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scrim $scrim)
    {
        //
    }
}
