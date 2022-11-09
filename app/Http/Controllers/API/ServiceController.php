<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\SimpleFieldRequest;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ServiceResource::collection(Service::all());
    }

    public function getInputs($request){
        $inputs = $request->except(['slug']);
        $inputs['slug'] = Str::slug($request->libelle);
        return $inputs;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SimpleFieldRequest $request)
    {
        $inputs = $this->getInputs($request);
        $user = Service::create($inputs);
        return new ServiceResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return ServiceResource
     */
    public function show($id)
    {
        $user = Service::findOrFail($id);
        return new ServiceResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return ServiceResource
     */
    public function update(SimpleFieldRequest $request, $id)
    {
        $inputs = $this->getInputs($request);
        $user = Service::findOrFail($id);
        $user->update($inputs);
        return new ServiceResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Service::findOrFail($id);
        $user->delete();
        return response(null, 204);
    }
}
