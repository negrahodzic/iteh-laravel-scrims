<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResultCollection;
use App\Http\Resources\ResultResource;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(new ResultCollection(Result::all()), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $result = Result::create($request->only([
            'server_id', 'server_name', 'scrim_name', 'date_played'
        ]));

        return new ResultResource($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return ResultResource
     */
    public function show(Result $result)
    {
        return new ResultResource($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        $result->update($request->only([
            'server_id', 'server_name', 'scrim_name', 'date_played'
        ]));

        return new ResultResource($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        $result->delete();

        return response([
            'message' => 'Successfully deleted.',
            'status' => Response::HTTP_NO_CONTENT
        ]);
    }
}
