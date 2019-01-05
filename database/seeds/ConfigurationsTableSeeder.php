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
        App\Configuration::create(['categorie' => 'médicament', 'type' => 'Nom', 'label' => 'DIFFU-K']);
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

        #Type médicament
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Endocrinologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Gastro-entéro-hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Hémostase et sang']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Anti-inflammatoires']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Oto-rhino-laryngologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Métabolisme et nutrition']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Pneumologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Infectiologie - parasitologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Rhumatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Allergologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Dermatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Anesthésie, réanimation']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Stomatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Ophtalmologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'Type', 'label' => 'Cancérologie et hématologie']);

        #test
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DOLIPRANE', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'EFFERALGAN', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DAFALGAN', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'LEVOTHYROX', 'label' =>'Endocrinologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'IMODIUM', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'KARDEGIC', 'label' =>'Hémostase et sang']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'SPASFON', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ISIMIG', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'TAHOR', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'SPEDIFEN', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'VOLTARENE', 'label' =>'Anti-inflammatoires']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ELUDRIL', 'label' =>'Oto-rhino-laryngologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'IXPRIM', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PARACETAMOL', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'FORLAX', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'MAGNE', 'label' =>'Métabolisme et nutrition']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'HELICIDINE', 'label' =>'Pneumologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'CLAMOXYL', 'label' =>'Infectiologie - Parasitologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PIASCLEDINE', 'label' =>'Rhumatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'LAMALINE', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'GAVISCON', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DAFLON', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ANTARENE', 'label' =>'Rhumatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'RHINOFLUIMUCIL', 'label' =>'Oto-rhino-laryngologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PLAVIX', 'label' =>'Hémostase et sang']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'MOPRAL', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'SUBUTEX', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'AERIUS', 'label' =>'Allergologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ORELOX', 'label' =>'Infectiologie - Parasitologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'INEXIUM', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'METEOSPASMYL', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'AUGMENTIN', 'label' =>'Infectiologie - Parasitologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'TOPLEXIL', 'label' =>'Allergologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PIVALONE', 'label' =>'Oto-rhino-laryngologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'VASTAREL', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ADVIL', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'EUPANTOL', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DEXERYL', 'label' =>'Dermatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'RENUTRYL', 'label' =>'Métabolisme et nutrition']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'XANAX', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'EMLAPATCH', 'label' =>'Anesthésie, réanimation']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'LASILIX', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ENDOTELON', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DEROXAT', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'TEMESTA', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'EFFEXOR', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PARACETAMOL', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'VENTOLINE', 'label' =>'Pneumologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'SOLUPRED', 'label' =>'Anti-inflammatoires']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DEXTROPROPOXYPHENE', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PNEUMOREL', 'label' =>'Pneumologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'INIPOMP', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PREVISCAN', 'label' =>'Hémostase et sang']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ASPEGIC', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'GINKOR', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'CRESTOR', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'MEDIATOR', 'label' =>'Métabolisme et nutrition']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'SERESTA', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'MOTILIUM', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PARACETAMOL', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'CELESTENE', 'label' =>'Anti-inflammatoires']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'AMLOR', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DIAMICRON', 'label' =>'Métabolisme et nutrition']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'TANAKAN', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ATARAX', 'label' =>'Allergologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DERINOX', 'label' =>'Oto-rhino-laryngologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'XYZALL', 'label' =>'Allergologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DEXTROPROPOXYPHENE', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'SERETIDE', 'label' =>'Pneumologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'COVERSYL', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PROPOFAN', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'HEXAQUINE', 'label' =>'Rhumatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DIFFU-K', 'label' =>'Métabolisme et nutrition']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'APROVEL', 'label' =>'Cardiologie et angéiologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PARIET', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ZALDIAR', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DIPROSONE', 'label' =>'Dermatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PARACETAMOL', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'BETADINE', 'label' =>'Stomatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'LYSANXIA', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ALODONT', 'label' =>'Stomatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'LEXOMIL', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DACRYOSERUM', 'label' =>'Ophtalmologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'FUCIDINE', 'label' =>'Dermatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'STILNOX', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'KETUM', 'label' =>'Rhumatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'STABLON', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'ART', 'label' =>'Rhumatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'BIOCALYPTOL', 'label' =>'Pneumologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'THIOVALONE', 'label' =>'Oto-rhino-laryngologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'DEBRIDAT', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'PYOSTACINE', 'label' =>'Infectiologie - Parasitologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'TIORFAN', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'SPECIAFOLDINE', 'label' =>'Cancérologie et hématologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'OGAST', 'label' =>'Gastro-Entéro-Hépatologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'RIVOTRIL', 'label' =>'Neurologie-psychiatrie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'TOPALGIC', 'label' =>'Antalgiques']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'NASONEX', 'label' =>'Oto-rhino-laryngologie']);
        App\Configuration::create(['categorie' => 'Médicament', 'type' => 'COAPROVEL', 'label' =>'Cardiologie et angéiologie']);

        #Centre Médicaux
        App\Configuration::create(['categorie' => 'Centre', 'type' => 'Type', 'label' =>'Centre de dialyse']);
        App\Configuration::create(['categorie' => 'Centre', 'type' => 'Type', 'label' =>'Centre dentaire']);
        App\Configuration::create(['categorie' => 'Centre', 'type' => 'Type', 'label' =>'Centre de radiologie']);
        App\Configuration::create(['categorie' => 'Centre', 'type' => 'Type', 'label' =>'Centre de soins de suite et de réadaptation']);
        App\Configuration::create(['categorie' => 'Centre', 'type' => 'Type', 'label' =>'Centre de santé']);

    }
}
