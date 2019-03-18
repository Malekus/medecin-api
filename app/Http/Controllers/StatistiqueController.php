<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StatistiqueController extends Controller
{
    public function index()
    {
        $medecins = $this->getLastRecordWeek('medecin');
        $patients = $this->getLastRecordWeek('patient');
        $consultations = $this->getLastRecordWeek('consultation');
        $medicaments = $this->getLastRecordWeek('medicament');
        $tabWeek = [];
        for ($i = 0; $i < 7; $i++) {
            $tabWeek[$i] = $medecins[$i]->nb + $patients[$i]->nb + $consultations[$i]->nb + $medicaments[$i]->nb;
        }

        $nbSpecialiteMedecin = DB::table('medecins')
            ->join('configurations', 'medecins.specialite_id', '=', 'configurations.id')
            ->select(DB::raw('label, count(*) as nbSpe'))
            ->groupBy('label')
            ->orderBy('label')
            ->get();

        $nbTypeMedoc = DB::table('medicaments')
            ->join('configurations', 'medicaments.type_id', '=', 'configurations.id')
            ->select(DB::raw('label, count(*) as nb'))
            ->groupBy('label')
            ->orderBy('label')
            ->get();

        $nbCategorie = (object)['medecins' => DB::table('medecins')->count(),
            'patients' => DB::table('patients')->count(),
            'consultations' => DB::table('consultations')->count(),
            'medicaments' => DB::table('medicaments')->count()];


        return response()->json(['tab' => (object)$tabWeek, 'specialite' => (object)$nbSpecialiteMedecin, 'typeMedicament' => (object)$nbTypeMedoc, 'categories' => $nbCategorie], 200, [], JSON_NUMERIC_CHECK);
    }

    private function getLastRecordWeek($table)
    {
        $x = DB::table($table . 's')
            ->select(DB::raw('count(*) as nb, datediff(CURRENT_DATE, created_at) as jour'))
            ->where(DB::raw('datediff(CURRENT_DATE, created_at) < 7 or datediff(CURRENT_DATE, updated_at) < 7'))
            ->groupBy(DB::raw('datediff(CURRENT_DATE, created_at)'))
            ->get()->toArray();

        for ($i = 0; $i < 7; $i++) {
            if (!isset($x[$i])) {
                $x[$i] = (object)['nb' => 0, 'jour' => $i];
            }
        }

        return $x;
    }


}

// select label, COUNT(*) from medecins, configurations where configurations.id = medecins.specialite_id group by label order by label
