<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePatientRequest;
use App\Http\Resources\Patient as PatientResource;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index(Request $request)
    {
        if ($request->get('search') == null) {
            $patients = Patient::all();
            return PatientResource::collection($patients);
        }
        $patients = Patient::where('nom', 'like', '%' . $request->get('search') . '%');
        return PatientResource::collection($patients);
    }

    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return new PatientResource($patient);
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        if ($patient->delete()) {
            return new PatientResource($patient);
        }
        return new PatientResource(new Patient());
    }

    public function store(StorePatientRequest $request)
    {
        $patient = $request->isMethod('put') ? Patient::findOrFail($request->id) : new Patient;
        $patient->nom = $request->input('nom');
        $patient->prenom = $request->input('prenom');
        $patient->numsecu = $request->input('numsecu');
        $patient->adresse = $request->input('adresse');
        $patient->tel = $request->input('tel');
        if ($patient->save()) {
            return new PatientResource($patient);
        }
        return new PatientResource(new Patient());
    }

}
