<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\EstablishmentRequest;
use App\Http\Resources\EstablishmentResource;
use App\Models\Establishment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EstablishmentResource::collection(Establishment::all());
    }

    public function getInputs($request){
        $inputs = $request->except(['image', 'banner']);
        $inputs['active'] = $request->has('active');
        $inputs['slug'] = Str::slug($request->nom);
        /*if($request->image) {
            $inputs['image'] = $this->saveImages($request);
        }
        if($request->banner) {
            $inputs['banner'] = $this->saveBanner($request);
        }*/
        return $inputs;
    }

    /*protected function saveImages($request)
    {
        $image = $request->file('image');
        $name = time() . '.' . $image->extension();
        $img = InterventionImage::make($image->path());
        $img->resize(400, 400)->save(public_path('/images/shops/') . $name);
        return $name;
    }

    protected function saveBanner($request)
    {
        $image = $request->file('banner');
        $image_name = Str::random(10);
        $ext = strtolower($image->extension()); // You can use also getClientOriginalName()
        $name = $image_name.'.'.$ext;
        $img = InterventionImage::make($image->path());
        $img->resize(1350, 550)->save(public_path('/images/banner/') . $name);
        return $name;
    }

    protected function deleteImage($shop)
    {
        File::delete([
            public_path('/images/shops/') . $shop->image,
        ]);
    }
    protected function deleteBanner($shop)
    {
        File::delete([
            public_path('/images/banner/') . $shop->banner,
        ]);
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return EstablishmentResource
     */
    public function store(EstablishmentRequest $request)
    {
        $inputs = $this->getInputs($request);
        $establishment = Establishment::create($inputs);
        return new EstablishmentResource($establishment);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $establishment = Establishment::findOrFail($id);
        return new EstablishmentResource($establishment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstablishmentRequest $request, $id)
    {
        $inputs = $this->getInputs($request);
        $establishment = Establishment::findOrFail($id);
        $establishment->update($inputs);
        return new EstablishmentResource($establishment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $establishment = Establishment::findOrFail($id);
        foreach ($establishment->addresses() as $address){
            $address->delete();
        }
        $establishment->delete();
        return response(null, 204);
    }
}
