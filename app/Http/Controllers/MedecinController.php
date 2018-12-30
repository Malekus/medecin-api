<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedecinRequest;
use App\Medecin;
use Illuminate\Http\Request;
use App\Http\Resources\Medecin as MedecinResource;

class MedecinController extends Controller
{

    public function index()
    {
        $medecins = Medecin::paginate(15);
        return MedecinResource::collection($medecins);
    }

    public function show($id)
    {

        $medecin = Medecin::findOrfail($id);

        dd($medecin);
        return new MedecinResource($medecin);
    }

    public function destroy($id)
    {
        $medecin = Medecin::findOrfail($id);

        if ($medecin->delete()) {
            return new MedecinResource($medecin);
        }
    }

    public function store(StoreMedecinRequest $request)
    {
        $medecin = $request->isMethod('put') ? Medecin::findOrFail($request->id) : new Medecin;
        $medecin->nom = $request->input('nom');
        $medecin->prenom = $request->input('prenom');

        if ($medecin->save()) {
            return new MedecinResource($medecin);
        }
    }


}
