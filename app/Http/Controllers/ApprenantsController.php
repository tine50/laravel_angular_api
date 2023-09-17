<?php

namespace App\Http\Controllers;

use App\Models\Apprenant;
use App\Http\Requests\UpdateApprenantRequest;
use App\Http\Resources\ApprenantResource;
use App\Http\Resources\ClassesResource;
use Illuminate\Http\Request;

class ApprenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return ApprenantResource::collection(Apprenant::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApprenantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apprenant = Apprenant::create([
            'prenom' => $request->prenom,
            'nom'    => $request->nom,
            "age"    => $request->age,
            "classe_id" => $request->classe_id,
        ]);
        $apprenant->save();
        return new ApprenantResource($apprenant);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function show(Apprenant $apprenant)
    {
        return new ApprenantResource($apprenant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Apprenant $apprenant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApprenantRequest  $request
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $apprenant = Apprenant::find($id);
        $apprenant->update([
            'prenom' => $request->prenom,
            'nom'    => $request->nom,
            "age"    => $request->age,
            "classe_id" => $request->classe_id,
        ]);

        $apprenant->save();
        return new ApprenantResource($apprenant);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apprenant  $apprenant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apprenant = Apprenant::find($id);
        $apprenant->delete();

        return response(null, 204);
    }
}
