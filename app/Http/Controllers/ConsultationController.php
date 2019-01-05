<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConsultationRequest;
use App\Http\Resources\Consultation as ConsultationResource;
use App\Consultation;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::paginate(15);
        return ConsultationResource::collection($consultations);
    }

    public function show($id)
    {
        $consultation = Consultation::findOrFail($id);
        return new ConsultationResource($consultation);
    }

    public function destroy($id)
    {
        $consultation = Consultation::findOrFail($id);
        if ($consultation->delete()) {
            return new ConsultationResource($consultation);
        }
        return new ConsultationResource(new Consultation());
    }

    public function store(StoreConsultationRequest $request)
    {
        $consultation = $request->isMethod('put') ? Consultation::findOrFail($request->id) : new Consultation;
        $consultation->medecin()->associate($request->input('medecin'));
        $consultation->patient()->associate($request->input('patient'));
        if ($consultation->save()) {
            $consultation->medicaments()->sync($request->input('medicaments'));
            return new ConsultationResource($consultation);
        }
        return new ConsultationResource(new Consultation());
    }
}
