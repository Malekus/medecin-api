<?php

namespace App\Http\Controllers;

use App\Centre;
use App\Configuration;
use App\Medecin;
use App\Patient;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function getCentres()
    {
        $centres = Centre::all()->pluck('nom', 'id');
        return $centres;
    }

    public function getPatients()
    {
        $patients = Patient::all('id', 'nom', 'prenom')->toArray();
        $r = [];
        foreach ($patients as $patient) {
            $r[$patient['id']] = $patient['nom'] . " " . $patient['prenom'];
        }
        return $r;
    }

    public function getMedecins()
    {
        $medecins = Medecin::all('id', 'nom', 'prenom')->toArray();
        $r = [];
        foreach ($medecins as $medecin) {
            $r[$medecin['id']] = "Dr " . $medecin['prenom'] . " " . strtoupper($medecin['prenom']);
        }
        return $r;
    }

    public function getMedicaments()
    {
        $medicaments = DB::table('configurations')
            ->join('medicaments', 'medicaments.nom_id', '=', 'configurations.id')
            ->select('medicaments.id', 'configurations.label')->pluck('configurations.label', 'medicaments.id');
        return $medicaments;
    }

    public function getDiplomes()
    {
        $diplomes = Configuration::where('type', 'Diplôme')->get()->pluck('label', 'id');
        return $diplomes;
    }

    public function getSpecialites()
    {
        $specialites = Configuration::where('categorie', 'Médecin')->where('type', 'Spécialité')->get()->pluck('label', 'id');
        return $specialites;
    }

    public function getTypes()
    {
        $types = Configuration::where('categorie', 'Médicament')->where('type', 'Type')->get()->pluck('label', 'id');
        return $types;
    }
}
