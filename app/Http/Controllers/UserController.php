<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\AcademicFormation;
use App\Models\Area;
use App\Models\AreaTa;
use App\Models\AssociatedLocation;
use App\Models\Ethnic;
use App\Models\FourthLevel;
use App\Models\Fund;
use App\Models\Management;
use App\Models\Nationality;
use App\Models\Position;
use App\Models\PriorityGroup;
use App\Models\Process;
use App\Models\Regimen;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return (new UserCollection($users))->additional([
            'msg'=>[
                'summary' => 'success',
                'detail' => 'Usuarios devueltos correctamente',
                'code' => '200'
            ]
        ])->response()->setStatusCode(200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->dni = $request->input('dni');
        $user->name= $request->input('name');
        $user->gender= $request->input('gender');
        $user->birthDate= $request->input('birthDate');
        $user->hiteDate= $request->input('hiteDate');
        $user->contributionNumber= $request->input('contributionNumber');
        $user->senescytRegistrationNumber= $request->input('senescytRegistrationNumber');
        $user->academicTitle= $request->input('academicTitle');
        $user->institutionalPhone= $request->input('institutionalPhone');
        $user->email= $request->input('email');
        $user->esigefActivity= $request->input('esigefActivity');
        $user->salary= $request->input('salary');
        $user->password= $request->input('password');
        $user->returnedMigrant= $request->input('returnedMigrant');
        $user->transportation= $request->input('transportation');
        $user->priority()->associate(PriorityGroup::find($request->input('priorityGroup')));
        $user->nationality()->associate(Nationality::find($request->input('nationality')));
        $user->ethnic()->associate(Ethnic::find($request->input('ethnicGroup')));
        $user->academic_formation()->associate(AcademicFormation::find($request->input('academicFormation')));
        $user->fourth_levels()->associate(FourthLevel::find($request->input('fourthLevel')));
        $user->position()->associate(Position::find($request->input('position')));
        $user->fund()->associate(Fund::find($request->input('funding')));
        $user->regimen()->associate(Regimen::find($request->input('regimen')));
        $user->process()->associate(Process::find($request->input('process')));
        $user->unit()->associate(Unit::find($request->input('unit')));
        $user->management()->associate(Management::find($request->input('management')));
        $user->area()->associate(Area::find($request->input('area')));
        $user->area_ta()->associate(AreaTa::find($request->input('area_ta')));
        $user->associated_location()->associate(AssociatedLocation::find($request->input('associated_location')));

        $user->save();

        return (new UserResource($user))->additional([
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
    public function show(string $id)
    {
        //
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
