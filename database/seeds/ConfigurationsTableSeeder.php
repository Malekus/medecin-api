<?php

use Illuminate\Database\Seeder;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Spécialité des médecins
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Spécialité',  'label' => 'Médecin Généraliste']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Spécialité',  'label' => 'Onconlogue']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Spécialité',  'label' => 'Psychologue']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Spécialité',  'label' => 'Dentiste']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Spécialité',  'label' => 'Allergologue']);

        # Diplôme des médecins
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Besançon']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Caen']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Brest']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Clermont-Ferrand']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Lorraine']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université catholique de Lille	']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Limoges']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Polynésie française']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Lille']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Amiens']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Nantes']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Tours']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Saint-Étienne']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Paris 5']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Paris 7']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université La Réunion']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Grenoble-Alpes']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Paris 6 (UPMC)']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Rouen']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Paris 13']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Paris 12']);
        App\Configuration::create(['categorie' => 'Médecin', 'type' => 'Diplôme', 'label' => 'Université Paris-Sud']);

        # Nom des médicamment
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DOLIPRANE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'EFFERALGAN']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DAFALGAN']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'LEVOTHYROX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'IMODIUM']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'KARDEGIC']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'SPASFON']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ISIMIG']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'TAHOR']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'SPEDIFEN']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'VOLTARENE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ELUDRIL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'IXPRIM']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PARACETAMOL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'FORLAX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'MAGNE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'HELICIDINE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'CLAMOXYL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PIASCLEDINE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'LAMALINE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'GAVISCON']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DAFLON']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ANTARENE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'RHINOFLUIMUCIL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PLAVIX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'MOPRAL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'SUBUTEX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'AERIUS']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ORELOX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'INEXIUM']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'METEOSPASMYL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'AUGMENTIN']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'TOPLEXIL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PIVALONE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'VASTAREL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ADVIL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'EUPANTOL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DEXERYL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'RENUTRYL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'XANAX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'EMLAPATCH']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'LASILIX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ENDOTELON']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DEROXAT']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'TEMESTA']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'EFFEXOR']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PARACETAMOL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'VENTOLINE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'SOLUPRED']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DEXTROPROPOXYPHENE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PNEUMOREL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'INIPOMP']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PREVISCAN']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ASPEGIC']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'GINKOR']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'CRESTOR']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'MEDIATOR']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'SERESTA']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'MOTILIUM']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PARACETAMOL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'CELESTENE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'AMLOR']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DIAMICRON']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'TANAKAN']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ATARAX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DERINOX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'XYZALL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DEXTROPROPOXYPHENE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'SERETIDE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'COVERSYL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PROPOFAN']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'HEXAQUINE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DIFFU']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'APROVEL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PARIET']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ZALDIAR']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DIPROSONE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PARACETAMOL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'BETADINE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'LYSANXIA']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ALODONT']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'LEXOMIL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DACRYOSERUM']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'FUCIDINE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'STILNOX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'KETUM']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'STABLON']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'ART']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'BIOCALYPTOL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'THIOVALONE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DEBRIDAT']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'PYOSTACINE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'TIORFAN']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'SPECIAFOLDINE']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'OGAST']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'RIVOTRIL']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'TOPALGIC']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'NASONEX']);
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'COAPROVEL']);

    }
}
