<?php

namespace App\Http\Controllers;

use PDF;
use Validator;
use App\Mail\Operateur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class InscriptionController extends Controller
{
    	public function affaire()
            {
		$operateur = DB::table('inscription_operateur')->orderBydesc('id')->paginate(6);
		$operateur2 = DB::table('inscription_operateur')->take(3)->get();
		//$categories = DB::table('categories')->get();
		return view('plateforme-affaires',[
		'operateur' => $operateur,
		'operateur2' => $operateur2,
		]);
		}
	public function operateurid($id)
    {	
	$operateur = DB::table('inscription_operateur')->where('id', $id)->first();
	$catalogue = DB::table('catalogue_operateur')->where('inscription_id', $id)->get();
	$operateur2 = DB::table('inscription_operateur')->take(5)->get();
	return view('operateur-info',[
	'operateur' => $operateur,
	'operateur2' => $operateur2,
	'catalogue' => $catalogue,
	]);
    }
    public function sinscrire()
    {
		return view('inscription');
	}
	 public function sinscrire2()
    {
		return view('inscription2');
	}
	public function liste2()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		return view('liste-des-inscriptions');
	}
	public function succes()
    {
		return view('succes');
    }
	public function operateur()
    {
		return view('inscription-operateur');
    }
	public function opPost(Request $request)
		{ 

            //   return $request;
            // if ($request->file('myfile')) {
            //     return "trouver";
            // }


            $this->validate($request,
                [
                    'myfile' => 'required|mimes:jpeg,jpg,png',
                ],
                [
                    'required' => '- Vous devez choisir un fichier image '
                ]
            );

            $image = $request->file('myfile');
			$filename = $image->getClientOriginalName();
			//$image->move(public_path('signatures'), $filename);
			
			$raison_sociale = $request->raison_sociale;
			$forme_juridique = $request->forme_juridique;
			$nom_rep = $request->nom_rep;
			$adresse = $request->adresse;
			$ville = $request->ville;
			$departement = $request->departement;
			$province = $request->province;
			$telephone = $request->telephone;
			$email = $request->email;
			$password = $request->password;
			$domaine = $request->domaine;
			$description = $request->description;
			$today = date('Y-m-d H:i:s');
			// $verification = DB::table('users')->where('email', $email)->first();

            $ip = DB::table('inscription_operateur')->insert([
                'nom_fichier' => $filename,
                'fichier' => $image->storeAs('Signatures', time(). '_'.$filename, 'public'),
                'raison_sociale' => $raison_sociale,
                'forme_juridique' => $forme_juridique,
                'nom_rep' => $nom_rep,
                'adresse' => $adresse,
                'ville' => $ville,
                'departement' => $departement,
                'province' => $province,
                'telephone' => $telephone,
                'email' => Auth::user()->email,
                'dateins' => $today,
                'domaine' => $domaine,
                'description' => $description,
            ]);

                DB::table('users')->where('id',Auth::user()->id)->update([
                    // 'name' => $nom_rep,
                    // 'email' => $email,
                    // 'password' => $password,
                    'roles' => "Entreprise",
                ]);
                        
                // $idLastusers = DB::table('users')->get()->last()->id;
                $idLastusers = Auth::user()->id;
                $today = date('Y-m-d');
                DB::table('compte')->insert([
                    'nom' => $nom_rep,
                    //'prenoms' => $prenoms,
                    'telephone' => $telephone,
                    'date_venue' => $today,
                    'type' => 'Entreprise',
                    'users_id' => $idLastusers,
                ]);

                $idLast= strlen($idLastusers);
                if ($idLast==1){
                DB::table('users')->where('id', $idLastusers)->update([
                        'code_dinvitation' => '000'.$idLastusers,
                    ]);
                } 
                elseif ($idLast==2){
                DB::table('users')->where('id', $idLastusers)->update([
                        'code_dinvitation' => '00'.$idLastusers,
                    ]);
                } 
                elseif ($idLast==3){
                DB::table('users')->where('id', $idLastusers)->update([
                        'code_dinvitation' => '0'.$idLastusers,
                    ]);
                 }
                else {
                DB::table('users')->where('id', $idLastusers)->update([
                        'code_dinvitation' => $idLastusers,
                    ]);
            }		

        
			$idLastins = DB::table('inscription_operateur')->get()->last()->id;
			session(['ins' => $idLastins]);
			// return redirect()->route('succes-inscription');
            return redirect()->to('tb_de_bord');
       
    }





	
	function VoirfichePDF()
    {
        $inscrip=DB::table('inscription_operateur')->where('id', session('ins'))->first();
        $pdf = PDF::setOptions([
            'images' => true
        ])->loadView('fiche_inscription', [
            'inscrip' => $inscrip,
        ]);
        return $pdf->stream();
    }
	function Voirfiche2PDF($id)
    {
        $inscrip=DB::table('inscription_operateur')->where('id', $id)->first();
        $pdf = PDF::setOptions([
            'images' => true
        ])->loadView('fiche_inscription', [
            'inscrip' => $inscrip,
        ]);
        return $pdf->stream();
    }
	
	public function inviter($users_id, $code_dinvitation)
    {
		session(['users_id' => $users_id]);
		session(['code_dinvitation' => $code_dinvitation]);
		return redirect('/');
    }
	
	
    function enregistrer (Request $request){
		$date_venue=date('Y-m-d');
		$nom= request("nom");
		$prenoms= request("prenoms");
		$telephone= request("telephone");
        $email= request("email");
        $password=request("password");
        //$user = DB::table('users')->where('email',$email)->where('password',$password )->first();
		$verification = DB::table('users')->where('email',$email)->first();
        if ($verification) {
			return redirect('/inscription')
            ->with('error', 'Cette adresse a déjà été associé à un compte');
        }
        else{
            DB::table('users')->insert(
                [
                    'email' => $email,
					'name' => $nom,
                    'password' => bcrypt($password),
                ]
            );
			$idLastusers = DB::table('users')->get()->last()->id;
			
			DB::table('compte')->insert(
                [
                    'nom' => $nom,
					'prenoms' => $prenoms,
                    'telephone' => $telephone,
                    'date_venue' => $date_venue,
                    'type' => 'Client',
                    'users_id' => $idLastusers,
                ]
            );
			$idLast= strlen($idLastusers);
			$codeee = Str::random(10); 
			$codee = strtoupper($codeee);
			if ($idLast==1){
            DB::table('users')->where('id', $idLastusers)->update(
                [
                    'code_dinvitation' => $codee.'000'.$idLastusers,
                ]
            );
        } elseif ($idLast==2){
            DB::table('users')->where('id', $idLastusers)->update(
                [
                    'code_dinvitation' => $codee.'00'.$idLastusers,
                ]
            );
        } elseif ($idLast==3){
            DB::table('users')->where('id', $idLastusers)->update(
                [
                    'code_dinvitation' => $codee.'0'.$idLastusers,
                ]
            );
        } else {
            DB::table('users')->where('id', $idLastusers)->update(
                [
                    'code_dinvitation' => $codee.''.$idLastusers,
                ]
            );
        }
		//$lastCode= DB::table('users')->get()->last()->id;
		
			
			$user = DB::table('users')->where('id',$idLastusers)->first();
			//$lien = "http://127.0.0.1:8000/"
			session(['user' => $user]);
			if (session('code_dinvitation')){
				$today = date('Y-m-d');
				DB::table('parrainage')->insert(
                [
                    'parrain_id' => session('users_id'),
					'parrain_code' => session('code_dinvitation'),
                    'users_id_parraine' => $idLastusers,
					'date_parrainage' => $today,
                ]
            );
			$user_id = DB::table('users')->where('code_dinvitation', session('code_dinvitation'))->first()->id;
			$totami = DB::table('compte')->where('users_id', $user_id)->first()->total_ami;
			DB::table('compte')->where('users_id', $user_id)->update(
                [
                    'total_ami' => ($totami + 1),
                ]
            );
			$lastPar= DB::table('parrainage')->get()->last()->id;
			DB::table('bonus_parrainage')->insert(
                [
                    'parrain_id' => session('users_id'),
                    'users_id_parraine' => $idLastusers,
                    'parrainage_id' => $lastPar,
					'montant' => 100,
                ]
            );
			}
			//return redirect()->route('informations', ['id'=> $idLastusers])->with('status', 'Suppression effectuée avec succes');
			return redirect()->route('tableaudebord')->with('status', 'Merci pour votre inscription, votre compte a été crée avec succès.Bienvenue ! Pour activer votre code d\'achat et lien d\'invitation vous devez vous abonner');
			
        }

    }
	public function liste()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$operateur = DB::table('inscription_operateur')->orderBydesc('id')->paginate(10);
	return view('liste-des-operateurs',[
	'operateur' => $operateur,
	]);
    }
	public function listeclient()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$client = DB::table('compte')->where('type', 'Client')->orderBydesc('id')->paginate(25);
	return view('liste-des-clients',[
	'client' => $client,
	]);
    }
	public function listeclass()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$par = DB::table('compte')->where('type', 'Client')->orderBydesc('total_ami')->paginate(25);
	return view('liste-des-classements',[
	'par' => $par,
	]);
    }
		//	VOIR OPERATEUR ID
		function VoirOperateur($id) {

        $operateurs= DB::table('inscription_operateur')->where('id',$id)->first();

        return [
            'operateurs' => $operateurs,
        ];
    }
	
	function valider() {
		$id=request('id');
        $operateurs = DB::table('inscription_operateur')->where('id',$id)->first();
		$email = DB::table('inscription_operateur')->where('id', $id)->first()->email;
		$nom_rep = DB::table('inscription_operateur')->where('id', $id)->first()->nom_rep;
		$telephone = DB::table('inscription_operateur')->where('id', $id)->first()->telephone;
		$password="o#2020YtbT";
		
		
		$verification = DB::table('users')->where('email', $email)->first();
		if ($verification){
			return redirect()->route('liste-des-operateurs')->with('error', 'Impossible de générer un compte car cet email a déjà été utilisé');
		} else {
			
			DB::table('inscription_operateur')->where('id', $id)->update(
                [
                    'etat' => "Actif",
                ]
            );
			DB::table('users')->insert(
            [
                'name' => $nom_rep,
                'email' => $email,
                'password' => $password,
                'roles' => "Entreprise",
            ]
        );
		$idLastusers = DB::table('users')->get()->last()->id;
			$today = date('Y-m-d');
			DB::table('compte')->insert(
                [
                    'nom' => $nom_rep,
					//'prenoms' => $prenoms,
                    'telephone' => $telephone,
                    'date_venue' => $today,
                    'type' => 'Entreprise',
                    'users_id' => $idLastusers,
                ]
            );
			$idLast= strlen($idLastusers);
			if ($idLast==1){
            DB::table('users')->where('id', $idLastusers)->update(
                [
                    'code_dinvitation' => '000'.$idLastusers,
                ]
            );
        } elseif ($idLast==2){
            DB::table('users')->where('id', $idLastusers)->update(
                [
                    'code_dinvitation' => '00'.$idLastusers,
                ]
            );
        } elseif ($idLast==3){
            DB::table('users')->where('id', $idLastusers)->update(
                [
                    'code_dinvitation' => '0'.$idLastusers,
                ]
            );
        } else {
            DB::table('users')->where('id', $idLastusers)->update(
                [
                    'code_dinvitation' => $idLastusers,
                ]
            );
        }
		$mailable = new Operateur($nom_rep, $password, $email);
        Mail::to($email)->send($mailable);
		return redirect()->route('liste-des-operateurs')->with('status', 'Succès de l\'opération ! Compte généré avec succès !; Un message vient d\'être envoyé par mail à l\'opérateur.');
		}
	}
	//PAIEMENT BONUS
	public function paiement($id)
    {
		if(session('user')== null) {
            return redirect('/login');
        }
	return view('paiement',[
		'id' => $id,
	]);
    }
	public function paiementpost($id)
    {
		$user_id = DB::table('compte')->where('id', $id)->first()->users_id;
        $montant=request('montant');
        $today = date('Y-m-d'); 
		$apayer = DB::table('bonus_parrainage')->where('parrain_id', $user_id)->sum('montant');
		
		$sommePaiement =  DB::table('paiement_bonus')->where('compte_id', $id)->get()->sum('montant');
		$total = $sommePaiement + $montant ;
		$total0 = $apayer - $sommePaiement ;
		
        if( $montant >  $total0 ) {
                $message = [
                "title" => 'Erreur',
                "type" => 'error',
                "response" => 'Le montant saisi ne doit pas dépasser le restant à payer :'. ' '. ($total0).' F',
                ];

                return $message;
       } else {
                DB::table('paiement_bonus')->insert(
                    [
                        'montant' => $montant,
                        'compte_id' => $id,
                        'date' => $today2,
                        'users_id' => $user_id,
                    ]
                );
				$reste = $total0 - $montant;
				DB::table('compte')->where('compte_id', $id)->update(
                    [
                        'reste' => $reste,
                ]);
                $message = [
                    "title" => 'success',
                    "type" => 'success',
                    "response" => 'Paiement enregistré avec succès !',
                ];
                return $message;

       }     
    }
	public function ajoutphoto()
    {
		return view('ajouter-photo-op');
    }
	function photopost (Request $request) {

        $photo=$request->file('photo');
		$id = DB::table('inscription_operateur')->where('email', Auth::user()->email)->first()->id;

            $name = $photo->getClientOriginalName();

            DB::table('inscription_operateur')->where('id', $id)->update(
                [
                    'nom_fichier' => $name,
                    'fichier' => $photo->storeAs('Signatures', time(). '_'.$name, 'public'),
                ]
            );
        return redirect()->route('tb_de_bord')->with('status', 'Photo de profil mise à jour avec succès !');
    }
	//SUPPRIMER
	function supimg($id) {

        DB::table('catalogue_operateur')->where('id', $id)->delete();
        return redirect()->route('tb_de_bord')->with('status', 'Image supprimée avec succès !');
    }
}
