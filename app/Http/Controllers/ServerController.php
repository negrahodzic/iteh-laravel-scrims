<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServerCollection;
use App\Http\Resources\ServerResource;
use App\Models\Server;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(new ServerCollection(Server::all()), Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $server = Server::create($request->only([
            'server_id', 'enabled_bot', 'role_admin_id', 'role_results_id', 'channel_logs_id'
        ]));

        return new ServerResource($server);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function show(Server $server)
    {
        return new ServerResource($server);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Server $server)
    {
        $server->update($request->only([
            'server_id', 'enabled_bot', 'role_admin_id', 'role_results_id', 'channel_logs_id'
        ]));

        return new ServerResource($server);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Server  $server
     * @return \Illuminate\Http\Response
     */
    public function destroy(Server $server)
    {
        $server->delete();

        return response([
            'message' => 'Successfully deleted.',
            'status' => Response::HTTP_NO_CONTENT
        ]);
    }
}
