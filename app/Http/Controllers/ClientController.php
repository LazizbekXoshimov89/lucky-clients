<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Http\Requests\ClientUpdateRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::get();
        return response()->json($client);
    }

    /*
       *
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        Client::create([
            "full_name" => $request->full_name,
            "gender" => $request->gender,
            "age" => $request->age
        ]);
        return response()->json(["message"=> "ok"], 201);  //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientUpdateRequest $request, string $id)
    {
      Client::where("id", $id)->update([
        "full_name" => $request->full_name,
        "gender" => $request->gender,
        "age" => $request->age
      ]);
      return response()->json(["message"=> "Ma\'lumot muvofaqqiyatli yangilandi!"], 200);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
