<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCentreRequest;
use App\Http\Resources\Centre as CentreResource;
use App\Centre;

class CentreController extends Controller
{
    public function index()
    {
        $centres = Centre::paginate(15);
        return CentreResource::collection($centres);
    }

    public function show($id)
    {
        $centre = Centre::findOrFail($id);
        return new CentreResource($centre);
    }

    public function destroy($id)
    {
        $centre = Centre::findOrFail($id);
        if ($centre->delete()) {
            return new CentreResource($centre);
        }
    }

    public function store(StoreCentreRequest $request)
    {
        $centre = $request->isMethod('put') ? Centre::findOrFail($request->id) : new Centre;
        $centre->nom = $request->input('nom');
        $centre->prenom = $request->input('prenom');

        if ($centre->save()) {
            return new CentreResource($centre);
        }
    }
}
