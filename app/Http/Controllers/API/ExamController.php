<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\SimpleFieldRequest;
use App\Http\Resources\ExamResource;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ExamResource::collection(Exam::all());
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
        $user = Exam::create($inputs);
        return new ExamResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return ExamResource
     */
    public function show($id)
    {
        $user = Exam::findOrFail($id);
        return new ExamResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return ExamResource
     */
    public function update(SimpleFieldRequest $request, $id)
    {
        $inputs = $this->getInputs($request);
        $user = Exam::findOrFail($id);
        $user->update($inputs);
        return new ExamResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Exam::findOrFail($id);
        $user->delete();
        return response(null, 204);
    }
}
