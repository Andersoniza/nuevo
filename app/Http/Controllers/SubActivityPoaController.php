<?php


namespace App\Http\Controllers;


use App\Http\Resources\SubActivityPoaCollection;
use App\Http\Resources\SubActivityPoaResource;
use App\Http\Controllers\Controller;
use App\Models\SubActivityPoa;
use App\Models\GeneralActivityPoa;
use App\Models\User;
use App\Models\TypePoa;
use Illuminate\Http\Request;


class SubActivityPoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subActivitysPoas = SubActivityPoa::get();
        return (new SubActivityPoaCollection($subActivitysPoas))->additional([
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
        $subActivityPoa = new SubActivityPoa();
        $subActivityPoa->title = $request->input('title');
        $subActivityPoa->generalActivitysPoa()->associate(GeneralActivityPoa::find($request->input('generalActivity')));
        $subActivityPoa->user()->associate(User::find($request->input('user')));
        $subActivityPoa->typePoa()->associate(TypePoa::find($request->input('typePoa')));


        $subActivityPoa->save();


        return (new SubActivityPoaResource($subActivityPoa))->additional([
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
        $subActivityPoa = SubActivityPoa::findOrFail($id);
        return response()->json($subActivityPoa);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
     {
         // Validación de datos
         $request->validate([
             'title' => 'required',
             'generalActivity' => 'required',
             'user' => 'required',
             'typePoa' => 'required',
         ]);
 
         // Actualizar el post
         $subActivityPoa = SubActivityPoa::findOrFail($id);
         $subActivityPoa->update($request->all());
 
         return response()->json($subActivityPoa, 200);
     }
     
     public function destroy($id)
    {
        $subActivityPoa = SubActivityPoa::findOrFail($id);
        $subActivityPoa->delete();


        return response()->json(null, 204);
    }


}


