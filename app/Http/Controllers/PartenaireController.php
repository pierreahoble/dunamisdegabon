<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use PDF;

class PartenaireController extends Controller
{

	public function succes()
    {
		return view('succesp');
    }
	public function partenaire()
    {
		return view('inscription-partenaire');
    }
	public function oppPost(Request $request)
		{ 
		
		$validation = Validator::make($request->all(),[
			'file' => 'required|file|filled|image',
			'domaine' => 'required',
			'email' => 'required|email',
		],
		[
			'email.required'=> '- Veuillez saisir votre Email<br/>',
			'email'=> '- Veuillez saisir un Email valid<br/>',
			'file'=> '- Vous devez choisir un fichier image<br/>',
			'filled'=> '- Le champ image ne peut pas être vide<br/>',
			'image'=> '- Le format de l\'image doit être jpg, jpeg, png<br/>',
			'domaine.required'=> '- Vous devez sélectionner au moins domaine <br/>',
		]
		);
		
		if ($validation->passes()){
			$image = $request->file('file');
			$filename = $image->getClientOriginalName();
			//$image->move(public_path('signatures'), $filename);
			
			$raison_sociale = $request->raison_sociale;
			$forme_juridique = $request->forme_juridique;
			$nom_rep = $request->nom_rep;
			$adresse = $request->adresse;
			$ville = $request->ville;
			$departement = $request->departement;
			$province = $request->province;
			$quartier = $request->quartier;
			$telephone = $request->telephone;
			$email = $request->email;
			$rea_pro_details = $request->rea_pro_details;
			$mobi_ress_details = $request->mobi_ress_details;
			$etud_concep_details = $request->etud_concep_details;
			$struc_orga_details = $request->struc_orga_details;
			$domaine = $request->domaine;
			$today = date('Y-m-d H:i:s');
			$verification = DB::table('users')->where('email', $email)->first();
			if ($verification){
			   return redirect()->route('inscription-operateur')->with('error', 'Cette adresse mail est déjà associé à un compte');
			}
			else {
			$ip = DB::table('inscription_partenaire')->insert(
            [
                        'nom_fichier' => $filename,
						'fichier' => $image->storeAs('Signatures', time(). '_'.$filename, 'public'),
						'raison_sociale' => $raison_sociale,
						'forme_juridique' => $forme_juridique,
						'nom_rep' => $nom_rep,
						'adresse' => $adresse,
						'ville' => $ville,
						'departement' => $departement,
						'province' => $province,
						'quartier' => $quartier,
						'telephone' => $telephone,
						'email' => $email,
						'rea_pro_details' => $rea_pro_details,
						'mobi_ress_details' => $mobi_ress_details,
                        'etud_concep_details' => $etud_concep_details,
						'struc_orga_details' => $struc_orga_details,
						'domaine' => $domaine,
						'dateins' => $today,
						
                    ]
				);
				$idLastins = DB::table('inscription_partenaire')->get()->last()->id;
				session(['ins' => $idLastins]);
				//return redirect()->route('succes-inscription');
				$message = [
					"title" => 'success',
					"type" => 'success',
					"response" => 'Votre inscription a été enregistrée avec succès !',
					"idins" => session('ins'),
				];
			   return $message; 
			   
		}} else{
			$message = [
					"title" => 'Erreur',
					"type" => 'error',
					"response" => $validation->errors()->all(),
				];
			return $message;
				
		}
    }
	
	function VoirfichePDF()
    {
        $inscrip=DB::table('inscription_partenaire')->where('id', session('ins'))->first();
        $pdf = PDF::setOptions([
            'images' => true
        ])->loadView('fiche_inscription_partenaire', [
            'inscrip' => $inscrip,
        ]);
        return $pdf->stream();
    }
	function Voirfiche2PDF($id)
    {
        $inscrip=DB::table('inscription_partenaire')->where('id', $id)->first();
        $pdf = PDF::setOptions([
            'images' => true
        ])->loadView('fiche_inscription_partenaire', [
            'inscrip' => $inscrip,
        ]);
        return $pdf->stream();
    }
	public function liste()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$partenaire = DB::table('inscription_partenaire')->orderBydesc('id')->paginate(10);
	return view('liste-des-partenaires',[
	'partenaire' => $partenaire,
	]);
    }
	
}
