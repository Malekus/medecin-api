<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedecinRequest;
use App\Http\Resources\Medecin as MedecinResource;
use App\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{

    public function index(Request $request)
    {

        if ($request->get('search') == null) {
            $medecins = Medecin::orderBy('updated_at', 'desc')->get();
            return MedecinResource::collection($medecins);
        }
        $medecins = Medecin::where('nom', 'like', '%' . $request->get('search') . '%')->get();
        return MedecinResource::collection($medecins);
    }

    public function show($id)
    {
        $medecin = Medecin::findOrFail($id);
        return new MedecinResource($medecin);
    }

    public function destroy($id)
    {
        $medecin = Medecin::findOrFail($id);
        if ($medecin->delete()) {
            return new MedecinResource($medecin);
        }
    }

    public function store(StoreMedecinRequest $request)
    {
        $medecin = $request->isMethod('put') ? Medecin::findOrFail($request->id) : new Medecin;
        $medecin->nom = $request->input('nom');
        $medecin->prenom = $request->input('prenom');
        $medecin->diplome()->associate($request->input('diplome'));
        $medecin->specialite()->associate($request->input('specialite'));
        if ($medecin->save()) {
            return new MedecinResource($medecin);
        }
    }


}
