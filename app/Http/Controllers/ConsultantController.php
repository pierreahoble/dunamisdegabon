<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use PDF;

class ConsultantController extends Controller
{
	public function succes()
    {
		return view('succesc');
    }
	public function ajoutcompetence()
    {
		return view('ajouter-competence');
    }
	public function ajouttravaux()
    {
		return view('ajouter-travaux');
    }
	public function ajoutphoto()
    {
		return view('ajouter-photo');
    }
	public function ajoutlangue()
    {
		return view('ajouter-langue');
    }
	public function consultant()
    {
		$pays = DB::table('pays')->get();
		return view('inscription-consultant', [
			'pays' => $pays,
		]);
    }
	public function opcPost(Request $request){
			$nom = $request->nom;
			$prenoms = $request->prenoms;
			$password=request('password');
			$confirm=request('confirm');
			$email = $request->email;
			$adresse = $request->adresse;
			$nationalite = $request->nationalite;
			$datenais = $request->datenais;
			$competence = $request->competence;
			$langue = $request->langue;
			$experience = $request->experience;
			$telephone = $request->telephone;
			$dateins = $request->dateins;
			$ville = $request->ville;
			$verification = DB::table('users')->where('email', $email)->first();
			if ($verification){
			   return redirect()->route('inscription-consultant')->with('error', 'Cette adresse mail est déjà associé à un compte');
			}
			else {
				 if($password==$confirm){
			$today = date('Y-m-d');
			$today2 = date('Y-m-d H:i:s');
			$ip = DB::table('inscription_consultant')->insert(
            [
						'nom' => $nom,
						'prenoms' => $prenoms,
						'ville' => $ville,
						'adresse' => $adresse,
						'nationalite' => $nationalite,
						'datenais' => $datenais,
						'email' => $email,
						'experience' => $experience,
						'telephone' => $telephone,
						'dateins' => $today,
						'date_soumis' => $today2,
						
                    ]
				);
			DB::table('users')->insert(
            [
                'name' => $nom.' '.$prenoms,
                'email' => $email,
                'password' => $password,
                'roles' => "Consultant",
            ]
			);
			$idLastusers = DB::table('users')->get()->last()->id;
			$today = date('Y-m-d');
			DB::table('compte')->insert(
                [
                    'nom' => $nom,
                    'prenoms' => $prenoms,
                    'telephone' => $telephone,
                    'date_venue' => $today,
                    'type' => 'Consultant',
                    'users_id' => $idLastusers,
                ]
				);
				/*$message = [
					"title" => 'success',
					"type" => 'success',
					"response" => 'Votre inscription a été enregistrée avec succès !',
					"idins" => session('ins'),
				];
			   return $message; */
			    return redirect()->route('succes-inscription-consultant');
	} else{
		return redirect()->route('inscription-consultant')
					->with('error', 'Les mots de passe ne sont pas identiques !')
					->withInput(
					  $request->except('nom'),
					  $request->except('prenoms'),
					  $request->except('telephone'),
					  $request->except('ville'),
					  $request->except('adresse'),
					  $request->except('nationalite'),
					  $request->except('email'),
					  $request->except('datenais')
					);
	}}}
	
	function VoirfichePDF()
    {
        $inscrip=DB::table('inscription_consultant')->where('id', session('ins'))->first();
		$travaux = DB::table('travaux_consultant')->where('inscription_id', session('ins'))->get();
		$langue = DB::table('langue_consultant')->where('inscription_id', session('ins'))->get();
        $pdf = PDF::setOptions([
            'images' => true
        ])->loadView('fiche_inscription_consultant', [
            'inscrip' => $inscrip,
            'travaux' => $travaux,
            'langue' => $langue,
        ]);
        return $pdf->stream();
    }
	function Voirfiche2PDF($id)
    {
        $inscrip=DB::table('inscription_consultant')->where('id', $id)->first();
		$travaux = DB::table('travaux_consultant')->where('inscription_id', $inscrip->id)->get();
		$langue = DB::table('langue_consultant')->where('inscription_id', $inscrip->id)->get();
		$competence = DB::table('competence_consultant')->where('inscription_id', $inscrip->id)->get();
        $pdf = PDF::setOptions([
            'images' => true
        ])->loadView('fiche_inscription_consultant', [
            'inscrip' => $inscrip,
            'travaux' => $travaux,
			'langue' => $langue,
			'competence' => $competence,
        ]);
        return $pdf->stream();
    }
	public function liste()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$consultant = DB::table('inscription_consultant')->orderBydesc('id')->paginate(10);
	return view('liste-des-consultants',[
	'consultant' => $consultant,
	]);
    }
	public function noscons()
    {
		$consultant = DB::table('inscription_consultant')->orderBydesc('id')->paginate(9);
	return view('nos-consultants',[
	'consultant' => $consultant,
	]);
    }
	
	function profil($id)
    {
        $inscrip=DB::table('inscription_consultant')->where('id', $id)->first();
		$travaux = DB::table('travaux_consultant')->where('inscription_id', $inscrip->id)->get();
        $pdf = PDF::setOptions([
            'images' => true
        ])->loadView('fiche_inscription_consultant2', [
            'inscrip' => $inscrip,
            'travaux' => $travaux,
        ]);
        return $pdf->stream();
    }
	function factureappro($id)
    {

		$appro = DB::table('appro_vendable')->where('id',$id)->first();
		$ligne = DB::table('ligne_appro_vendable')->where('appro_id',$id)->where('etat','Validée')->get();
		$lignem = DB::table('ligne_appro_vendable')->where('appro_id',$id)->where('etat','Validée')->sum('montligne');
        $pdf = PDF::loadView('/appro/facture', [
            'ligne' => $ligne,
			'appro' => $appro,
			'lignem' => $lignem,
		]);
		
        return $pdf->stream();
    }

    function compost(Request $request)
    {

        $competence=collect(request('competence'))->chunk(3);
		$id = DB::table('inscription_consultant')->where('email', session('user')->email)->first()->id;
        $i=0;

        foreach ($competence as $key=> $competences){

            DB::table('competence_consultant')->insert(
                [
                    'inscription_id' => $id,
                    'libelle' => $competences[0 +$i],
                    'niveau' => $competences[1 +$i],
                    'diplome' => $competences[2 +$i],
                ]
            );

            $i += count($competences->toArray());

        }

            $message = [
                "title" => 'Succès',
                "type" => 'success',
                "response" => 'Enregistrement effectué avec succès !',
            ];

            return $message;
    }
	function languepost(Request $request)
    {

        $langue=collect(request('langue'))->chunk(2);
		$id = DB::table('inscription_consultant')->where('email', session('user')->email)->first()->id;
        $i=0;

        foreach ($langue as $key=> $langues){

            DB::table('langue_consultant')->insert(
                [
                    'inscription_id' => $id,
                    'libelle' => $langues[0 +$i],
                    'niveau' => $langues[1 +$i],
                ]
            );

            $i += count($langues->toArray());

        }

            $message = [
                "title" => 'Succès',
                "type" => 'success',
                "response" => 'Enregistrement effectué avec succès !',
            ];

            return $message;
    }
		function travauxpost(Request $request)
    {

        $travaux=collect(request('travaux'))->chunk(9);
		$id = DB::table('inscription_consultant')->where('email', session('user')->email)->first()->id;
        $i=0;

        foreach ($travaux as $key=> $travau){

            DB::table('travaux_consultant')->insert(
                [
                    'inscription_id' => $id,
                    'client' => $travau[0 +$i],
                    'profil' => $travau[1 +$i],
                    'activite_principale' => $travau[2 +$i],
                    'lieu' => $travau[3 +$i],
                    'moisdebut' => $travau[4 +$i],
                    'anneedebut' => $travau[5 +$i],
                    'moisfin' => $travau[6 +$i],
                    'anneefin' => $travau[7 +$i],
                    'mission' => $travau[8 +$i],
                ]
            );

            $i += count($travau->toArray());

        }

            $message = [
                "title" => 'Succès',
                "type" => 'success',
                "response" => 'Enregistrement effectué avec succès !',
            ];

            return $message;
    }
	function photopost (Request $request) {

        $photo=$request->file('photo');
		$id = DB::table('inscription_consultant')->where('email', session('user')->email)->first()->id;

            $name = $photo->getClientOriginalName();

            DB::table('inscription_consultant')->where('id', $id)->update(
                [
                    'nom_fichier' => $name,
                    'fichier' => $photo->storeAs('Passeport', time(). '_'.$name, 'public'),
                ]
            );
        return redirect()->route('tableaudebordconsultant')->with('status', 'Photo de profil ajoutée avec succès !');
    }
	function supprimer($id) {

        DB::table('competence_consultant')->where('id', $id)->delete();
        return redirect()->route('tableaudebordconsultant')->with('status', 'La compétence a été supprimée avec succès !');
    }
	function languesupprimer($id) {

        DB::table('langue_consultant')->where('id', $id)->delete();
        return redirect()->route('tableaudebordconsultant')->with('status', 'La langue a été supprimée avec succès !');
    }
	function travauxsupprimer($id) {

        DB::table('travaux_consultant')->where('id', $id)->delete();
        return redirect()->route('tableaudebordconsultant')->with('status', 'Expérience supprimée avec succès !');
    }
	
	
}
