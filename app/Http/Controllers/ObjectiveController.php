<?php

namespace App\Http\Controllers;


use App\Http\Resources\ObjectiveCollection;
use App\Http\Resources\ObjectiveResource;
use App\Models\IndicatorPei;
use App\Models\TypePei;
use App\Models\ObjectivePei;
use App\Models\Departament;
use App\Models\Category;
use App\Models\Area;
use App\Models\User;

use Illuminate\Http\Request;

class ObjectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objectives = ObjectivePei::get();
        return (new ObjectiveCollection($objectives))->additional([
            'msg'=>[
                'summary' => 'success',
                'detail' => '',
                'code' => '200'
            ]
        ])->response()->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $objective = new ObjectivePei();
        $objective->title = $request->input('title');
        $objective->indicatorPei()->associate(IndicatorPei::find($request->input('indicatorPei')));
        $objective->typePei()->associate(TypePei::find($request->input('typePei')));
        $objective->departament()->associate(Departament::find($request->input('department')));
        $objective->category()->associate(Category::find($request->input('category')));
        $objective->area()->associate(Area::find($request->input('area')));
        $objective->user()->associate(User::find($request->input('user')));
        $objective->save();

        return (new ObjectiveResource($objective))->additional([
            'msg'=>[
                'summary' => 'success',
                'detail' => 'El usuario a sido creado',
                'code' => '200'
            ]
        ])->response()->setStatusCode(200);
    }

    /**
     * Display the specified resource.
     */
    public function show(ObjectivePei $objective)
    {
        $objective = ObjectivePei::find($objective);
        return $objective;
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
