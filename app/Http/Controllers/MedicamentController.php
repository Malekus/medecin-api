<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedicamentRequest;
use App\Http\Resources\Medicament as MedicamentResource;
use App\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->get('search') == null) {
            $medicaments = Medicament::all();
            return MedicamentResource::collection($medicaments);
        }

        $medicaments = Medicament::where('nom_id', 'like', '%' . $request->get('search') . '%')
            ->orWhere('type_id', 'like', '%' . $request->get('search') . '%')->get();
        return MedicamentResource::collection($medicaments);
    }

    public function show($id)
    {
        $medicament = Medicament::findOrFail($id);
        return new MedicamentResource($medicament);
    }

    public function destroy($id)
    {
        $medicament = Medicament::findOrFail($id);

        if ($medicament->delete()) {
            return new MedicamentResource($medicament);
        }
    }

    public function store(StoreMedicamentRequest $request)
    {
        $medicament = $request->isMethod('put') ? Medicament::findOrFail($request->id) : new Medicament;
        $medicament->nom()->associate($request->input('nom'));
        $medicament->type()->associate($request->input('type'));

        if ($medicament->save()) {
            return new MedicamentResource($medicament);
        }
    }


}
