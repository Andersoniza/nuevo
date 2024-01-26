<?php
namespace App\Http\Controllers;
use App\Http\Resources\ExtraPoaCollection;
use App\Http\Resources\ExtraPoaResource;
use App\Http\Controllers\Controller;
use App\Models\ExtraPoa;
use App\Models\TypePoa;
use Illuminate\Http\Request;


class ExtraPoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extrasPoas = ExtraPoa::get();
        return (new ExtraPoaCollection($extrasPoas))->additional([
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
        $extrasPoas = new ExtraPoa();
        $extrasPoas->name = $request->input('name');
        $extrasPoas->typePoa()->associate(TypePoa::find($request->input('typePoa')));


        $extrasPoas->save();


        return (new ExtraPoaResource($extrasPoas))->additional([
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
        $extrasPoas = ExtraPoa::findOrFail($id);
        return response()->json($extrasPoas);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
     {
         // Validación de datos
         $request->validate([
             'name' => 'required',
             'typePoa' => 'required',
         ]);
 
         // Actualizar el post
         $extrasPoas = ExtraPoa::findOrFail($id);
         $extrasPoas->update($request->all());
 
         return response()->json($extrasPoas, 200);
     }
     
     public function destroy($id)
    {
        $extrasPoas = ExtraPoa::findOrFail($id);
        $extrasPoas->delete();


        return response()->json(null, 204);
    }


}


