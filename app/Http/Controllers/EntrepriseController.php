<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EntrepriseController extends Controller
{

    public function cataloguephoto()
    {
		return view('ajouter-catalogue');
    }
	public function abonnement()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$cli = DB::table('compte')->where('type', 'Client')->orderBydesc('id')->get();
		return view('abonnement',[
		'cli' => $cli,
		]);
    }
	public function listeabon()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$abon = DB::table('abonnement_client')->orderBydesc('id')->paginate(10);
		return view('liste_des_abonnements',[
		'abon' => $abon,
		]);
    }
	public function abonnementp()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$today = date('Y-m-d H:i:s');
		$today2 = date('Y-m-d');
		$compte_id= request("compte_id");
		$code_client= DB::table('users')->where('id', $compte_id)->first()->code_dinvitation;
		$duree= request("duree");
		if ($duree == "1 an"){
			$today1 = (new \Carbon\Carbon($today))->addYear(1);
		} else if ($duree == "2 ans"){
			$today1 = (new \Carbon\Carbon($today))->addYear(2);
		} else if ($duree == "3 ans"){
			$today1 = (new \Carbon\Carbon($today))->addYear(3);
		}
		$abonnement = DB::table('abonnement_client')->insert(
            [
                        'code_client' => $code_client,
                        'date_abonnement' => $today,
                        'dateab' => $today2,
                        'date_fin_abonnement' => $today1,
						'duree' => $duree,
						'compte_id' => $compte_id,
						 ]
				);
				return redirect()->route('liste_des_abonnements')->with('status', 'Abonnement enregistré avec succès !');
		
		
    }
	public function voir()
    {
		return view('entreprise');
    }
	public function liste()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$ent = DB::table('compte')->where('type', 'Entreprise')->orderBydesc('id')->paginate(10);
		return view('liste_des_entreprises',[
			'ent'=>$ent,
		]);
    }
	
	public function listecli()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$cli = DB::table('compte')->where('type', 'Client')->orderBydesc('id')->paginate(10);
		return view('liste_des_clients',[
			'cli'=>$cli,
		]);
    }
	
    function enregistrer (Request $request){
		$nom_rep= request("nom_rep");
		$prenom_rep= request("prenom_rep");
		$raison_sociale = request("raison_sociale");
		$email= request("email");
		$telephone= request("telephone");
        $adresse= request("adresse");
       // $password=request("password");
		$verification = DB::table('users')->where('email',$email)->first();
        if ($verification){
			return redirect('/entreprise')
            ->with('error', 'Cette adresse a déjà été associé à un compte');
        }
        else{
            DB::table('users')->insert(
                [
                    'email' => $email,
					'name' => $raison_sociale,
                    'password' => 12345678,
					'roles' => 'Entreprise',
                ]
            );
			$idLastusers = DB::table('users')->get()->last()->id;
			$date_venue=date('Y-m-d');
			DB::table('compte')->insert(
                [
                    'nom' => $nom_rep,
					'prenoms' => $prenom_rep,
                    'telephone' => $telephone,
                    'adresse' => $adresse,
					'date_venue' => $date_venue,
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
			//return redirect()->route('informations', ['id'=> $idLastusers])->with('status', 'Suppression effectuée avec succes');
			return redirect()->route('entreprise')->with('status', 'Succès de l\'enregistrement !');
        }

    }
	function ajoutcatalogue (Request $request) {

        $photo=$request->file('photo');
		$id = DB::table('inscription_operateur')->where('email', Auth::user()->email)->first()->id;
		$count = DB::table('catalogue_operateur')->where('inscription_id', $id)->get()->count();
		if ($count == 3){
			return redirect()->route('ajouter-catalogue')->with('error', 'Vous ne pouvez plus ajouter d\'images. La limite est atteint (3)!');
		} else {
            $name = $photo->getClientOriginalName();

            DB::table('catalogue_operateur')->where('id', $id)->insert(
                [
                    'nom_fichier' => $name,
                    'inscription_id' => $id,
                    'fichier' => $photo->storeAs('Passeport', time(). '_'.$name, 'public'),
                ]
            );
            $filename=$photo->storeAs('Passeport', time(). '_'.$name, 'public');
            $photo->move('storage/Passeport',$filename);
        return redirect()->route('ajouter-catalogue')->with('status', 'Image de catalogue ajoutée avec succès !');
    }}
}
