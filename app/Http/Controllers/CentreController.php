<?php

namespace App\Http\Controllers;

use App\Centre;
use App\Http\Requests\StoreCentreRequest;
use App\Http\Resources\Centre as CentreResource;

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
        $centre->type()->associate($request->input('type'));
        $centre->adresse = $request->input('adresse');

        if ($centre->save()) {
            return new CentreResource($centre);
        }
    }
}
