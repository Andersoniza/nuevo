<?php


namespace App\Http\Controllers;


use App\Http\Resources\GeneralActivityPoaCollection;
use App\Http\Resources\GeneralActivityPoaResource;
use App\Http\Controllers\Controller;
use App\Models\GeneralActivityPoa;
use App\Models\IndicatorPoa;
use App\Models\ActivityPei;
use App\Models\User;
use App\Models\ExperimentalStation;
use Illuminate\Http\Request;


class GeneralActivityPoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $generalActivityPoa = GeneralActivityPoa::all();  
    $generalActivityPoa = $generalActivityPoa->toArray();


    return response()->json([
        'data' => $generalActivityPoa,
        'msg' => [
            'summary' => 'success',
            'detail' => '',
            'code' => '200'
        ]
    ], 200);
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $generalActivityPoa = new GeneralActivityPoa();
        $generalActivityPoa->title = $request->input('title');
        $generalActivityPoa->startDate = $request->input('startDate');
        $generalActivityPoa->finalDate = $request->input('finalDate');
        $generalActivityPoa->indicatorPoa()->associate(IndicatorPoa::find($request->input('IndicatorPoa')));
        $generalActivityPoa->activityPei()->associate(ActivityPei::find($request->input('ActivityPei')));
        $generalActivityPoa->user()->associate(User::find($request->input('user')));
        $generalActivityPoa->experimentalStation()->associate(ExperimentalStation::find($request->input('ExperimentalStation')));


        $generalActivityPoa->save();


        return (new GeneralActivityPoaResource($generalActivityPoa))->additional([
            'msg'=>[
                'summary' => 'success',
                'detail' => 'El titulo E',
                'code' => '200'
            ]
        ])->response()->setStatusCode(200);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $generalActivityPoa = GeneralActivityPoa::findOrFail($id);
        return response()->json($generalActivityPoa);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
     {
         // Validación de datos
         $request->validate([
             'title' => 'required',
             'startDate' => 'required',
             'finalDate' => 'required',
             'typePoa' => 'required',
             'IndicatorPoa' => 'required',
             'ActivityPei' => 'required',  
             'user' => 'required',  
             'ExperimentalStation' => 'required',              
             
         ]);
 
         // Actualizar el post
         $generalActivityPoa = GeneralActivityPoa::findOrFail($id);
         $generalActivityPoa->update($request->all());
 
         return response()->json($generalActivityPoa, 200);
     }
     
     public function destroy($id)
    {
        $generalActivityPoa = GeneralActivityPoaPei::findOrFail($id);
        $generalActivityPoa->delete();


        return response()->json(null, 204);
    }


}
