<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\ResultRequest;
use App\Http\Resources\ResultResource;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ResultResource::collection(Result::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ResultRequest $request)
    {
        $result = Result::create($request->all());
        return new ResultResource($result);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return ResultResource
     */
    public function show($id)
    {
        $result = Result::findOrFail($id);
        return new ResultResource($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return ResultResource
     */
    public function update(ResultRequest $request, $id)
    {
        $result = Result::findOrFail($id);
        $result->update($request->all());
        return new ResultResource($result);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::findOrFail($id);
        $result->delete();
        return response(null, 204);
    }
}
