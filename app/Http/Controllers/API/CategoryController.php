<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\SimpleFieldRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return CategoryResource::collection(Category::all());
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
        $user = Category::create($inputs);
        return new CategoryResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return CategoryResource
     */
    public function show($id)
    {
        $user = Category::findOrFail($id);
        return new CategoryResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return CategoryResource
     */
    public function update(SimpleFieldRequest $request, $id)
    {
        $inputs = $this->getInputs($request);
        $user = Category::findOrFail($id);
        $user->update($inputs);
        return new CategoryResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Category::findOrFail($id);
        $user->delete();
        return response(null, 204);
    }
}
