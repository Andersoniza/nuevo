<?php


namespace App\Http\Controllers;


use App\Http\Resources\TypePoaCollection;
use App\Http\Resources\TypePoaResource;
use App\Http\Controllers\Controller;
use App\Models\TypePoa;
use Illuminate\Http\Request;


class TypePoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typePoas = TypePoa::get();
        return (new TypePoaCollection($typePoas))->additional([
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
        $typePoas = new TypePoa();
        $typePoas->name = $request->input('name');


        $typePoas->save();


        return (new typePoaResource($typePoas))->additional([
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
        $typePoas = TypePoa::findOrFail($id);
        return response()->json($typePoas);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
     {
         // Validación de datos
         $request->validate([
             'name' => 'required',
         ]);
 
         // Actualizar el post
         $typePoas = TypePoa::findOrFail($id);
         $typePoas->update($request->all());
 
         return response()->json($typePoas, 200);
     }
     
     public function destroy($id)
    {
        $typePoas = TypePoa::findOrFail($id);
        $typePoas->delete();


        return response()->json(null, 204);
    }


}


