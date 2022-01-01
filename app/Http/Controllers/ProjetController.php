<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\Demande;
use Illuminate\Support\Facades\Mail;
use Validator;
use PDF;
use Illuminate\Mail\Mailable;
use App\Mail\DossierEnTraitement;
use App\Mail\DossierFermee;
use App\Mail\DossierValidee;

class ProjetController extends Controller
{
	public function creer()
    {
		return view('demande-de-projet');
    }
	public function voir()
    {
		return view('ajouter_projet');
    }
	public function succes()
    {
		return view('succesd');
    }
	public function creer2()
    {
		$projet=DB::table('projet')->get();
		return view('choisir-projet',[
			'projet' => $projet,
		]);
    }
	public function dem(Request $request)
		{
			$validation = Validator::make($request->all(),[
			'file' => 'required|mimes:doc,docx,pdf',
		],
		[
			'file.required'=> '- Vous devez choisir un fichier document(docx, doc, pdf)<br/>',
		]
		);
			
		    if ($validation->passes()){
			$image = $request->file('file');
			$filename = $image->getClientOriginalName();
			$nom = $request->nom_rep;
			$raison_sociale = $request->raison_sociale;
			$forme_juridique = $request->forme_juridique;
			$email = $request->email;
			$adresse = $request->adresse;
			$telephone = $request->telephone;
			$profil = $request->profil;
			$projet = $request->projet;
			$autre = $request->autre;
			//$intitule = $request->intitule;
			
			$today = date('Y-m-d');
			$today2 = date('Y-m-d H:i:s');
			$ip = DB::table('demande_projet')->insert(
            [
						'nom_fichier' => $filename,
						'fichier' => $image->storeAs('DemandeP', time(). '_'.$filename, 'public'),
						'nom_rep' => $nom,
						'raison_sociale' => $raison_sociale,
						'forme_juridique' => $forme_juridique,
						'adresse' => $adresse,
						'email' => $email,
						'profil' => $profil,
						'telephone' => $telephone,
						'projet' => $projet,
						'dateins' => $today,
						'date_soumis' => $today2,
						'autre' => $autre,
						//'intitule' => $autre,
                    ]
				);
				$idLastdem = DB::table('demande_projet')->get()->last()->id;
            $id2= strlen($idLastdem);
            if ($id2==1){
                DB::table('demande_projet')->where('id', $idLastdem)->update(
                    [
                        'reference' => '000'.$idLastdem,
                    ]
                );
            } elseif ($id2==2){
                DB::table('demande_projet')->where('id', $idLastdem)->update(
                    [
                        'reference' => '00'.$idLastdem,
                    ]
                );
            } elseif ($id2==3){
                DB::table('demande_projet')->where('id', $idLastdem)->update(
                    [
                        'reference' => '0'.$idLastdem,
                    ]
                );
            } else {
                DB::table('demande_projet')->where('id', $idLastdem)->update(
                    [
                        'reference' => $idLastdem,
                    ]
                );
            }
				$mailable = new Demande();
				Mail::to('info@dunamisdegabon.com')->send($mailable);
				$message = [
					"title" => 'Erreur',
					"type" => 'success',
					"response" => "Succès de l'enregistrement",
				];
			return $message;
			return redirect()->route('succes-demande')->with('status', 'Succès de l\'opération ! Votre demande a bien été enregistrée!; Vous serez averti par mail lorsque votre demande traitée et prise en compte.');
			   
		}
		
		else{
			$message = [
					"title" => 'Erreur',
					"type" => 'error',
					"response" => $validation->errors()->all(),
				];
			return $message;
				
		}
		
		}
		public function liste()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$projet=DB::table('demande_projet')->orderBydesc('id')->paginate(5);
		return view('liste_des_demandes',[
			'projet' => $projet,
		]);
    }
	//A Traiter
	public function listeatraiter()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$projet=DB::table('demande_projet')->where('etat2',0)->orderBydesc('id')->paginate(5);
		return view('liste_des_demandes_a_traiter',[
			'projet' => $projet,
		]);
    }
	//Fermé
	public function listeferme()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$projet=DB::table('demande_projet')->where('etat2',2)->orderBydesc('id')->paginate(5);
		return view('liste_des_demandes_fermees',[
			'projet' => $projet,
		]);
    }
	//VALIDEES
	public function listevalidee()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$projet=DB::table('demande_projet')->where('etat2',3)->orderBydesc('id')->paginate(5);
		return view('liste_des_demandes_validees',[
			'projet' => $projet,
		]);
    }
	//VALIDEES
	public function listeencours()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$projet=DB::table('demande_projet')->where('etat2',1)->orderBydesc('id')->paginate(5);
		return view('liste_des_demandes_en_cours',[
			'projet' => $projet,
		]);
    }
		public function downloadDoc($pathToFile)
    {
        //return response()->download(public_path('storage/Document/'.$pathToFile));
        return response()->download(storage_path('app/public/DemandeP/'.$pathToFile));
    }
	//AJOUTER NOUVEAU PROJET
	public function ajouterPost(Request $request)
		{ 
		
		$validation = Validator::make($request->all(),[
			'file' => 'required|file|filled|image',
		],
		[
			'file'=> '- Vous devez choisir un fichier image<br/>',
			'filled'=> '- Le champ image ne peut pas être vide<br/>',
			'image'=> '- Le format de l\'image doit être jpg, jpeg, png<br/>',
		]
		);
		
		if ($validation->passes()){
			$image = $request->file('file');
			$filename = $image->getClientOriginalName();
			//$image->move(public_path('signatures'), $filename);
			
			$nom = $request->nom;
			$typepro = $request->typepro;
			$today = date('Y-m-d H:i:s');
			$ip = DB::table('projet')->insert(
            [
                        'nom_fichier' => $filename,
						'fichier' => $image->storeAs('ImageProjet', time(). '_'.$filename, 'public'),
						'libelle' => $nom,
						'typepro' => $typepro,
						
                    ]
				);
				$message = [
					"title" => 'success',
					"type" => 'success',
					"response" => 'Succès de l\'enregistrement !',
				];
			   return $message; 
			   
		} else{
			$message = [
					"title" => 'Erreur',
					"type" => 'error',
					"response" => $validation->errors()->all(),
				];
			return $message;
				
		}
    }
	
	function Voirprojet ($id) {

        $demandes= DB::table('demande_projet')->where('id',$id)->first();

        return [
            'demandes' => $demandes,
        ];
    }
	//VALIDER LA DEMANDE DE PROJET
	function validerdpost() {
		
        $id=request('id');
        $dp = DB::table('demande_projet')->where('id', $id)->first();
		$nom = DB::table('demande_projet')->where('id', $id)->first()->nom_rep;
        $email = DB::table('demande_projet')->where('id', $id)->first()->email;
        $reference = DB::table('demande_projet')->where('id', $id)->first()->reference;
		$today = date('Y-m-d');
		DB::table('demande_projet')->where('id', $id)->update(
            [
                'etat2' => "3",
                'date_end' => $today,
            ]
        );
		$mailable = new DossierValidee($nom,$reference);
		Mail::to($email)->send($mailable);
        return redirect()->route('liste_des_demandes')->with('status', 'La demande a été cloturée avec succès !');
    }
	function FermerdPost() {
		
        $id=request('id');
        $dp = DB::table('demande_projet')->where('id', $id)->first();
		$nom = DB::table('demande_projet')->where('id', $id)->first()->nom_rep;
        $email = DB::table('demande_projet')->where('id', $id)->first()->email;
        $reference = DB::table('demande_projet')->where('id', $id)->first()->reference;
		$today = date('Y-m-d');
		DB::table('demande_projet')->where('id', $id)->update(
            [
                'etat2' => "2",
                'date_end' => $today,
            ]
        );
		$mailable = new DossierFermee($nom,$reference);
		Mail::to($email)->send($mailable);
        return redirect()->route('liste_des_demandes')->with('error', 'La demande a été fermée avec succès !');
    }
	function TraiterdPost() {
		
        $id=request('id');
        $dp = DB::table('demande_projet')->where('id', $id)->first();
        $nom = DB::table('demande_projet')->where('id', $id)->first()->nom_rep;
        $email = DB::table('demande_projet')->where('id', $id)->first()->email;
        $reference = DB::table('demande_projet')->where('id', $id)->first()->reference;
		$today = date('Y-m-d');
		DB::table('demande_projet')->where('id', $id)->update(
            [
                'etat2' => "1",
            ]
        );
		$mailable = new DossierEnTraitement($nom,$reference);
		Mail::to($email)->send($mailable);
        return redirect()->route('liste_des_demandes')->with('status', 'La demande a été mise en traitement avec succès !');
    }
	//FICHE DE LA DEMANDE
	function ficheD($id)
    {
		$demande = DB::table('demande_projet')->where('id',$id)->first();
		$pdf = PDF::loadView('/fiche-demande-projet', [
			'demande' => $demande,
		]);
        return $pdf->stream();
	}
	
}
