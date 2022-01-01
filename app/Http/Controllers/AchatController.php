<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
//use Illuminate\Pagination\Paginator;

class AchatController extends Controller
{
    public function voir()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
	return view('achat');
    }
	public function liste()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		if(session('user')->roles == 'Admin'){
        $achat = DB::table('achat')->get();
        } else if(session('user')->roles == 'Client'){
        $achat = DB::table('achat')->where('code_client',session('user')->code_dinvitation)->get();
            } else {
        $achat = DB::table('achat')->where('users_id',session('user')->id)->get();
            }
		return view('liste_des_achats',[
		'achat' => $achat,
		]);
    }
	
	function enregistrer (Request $request) {

        $date_achat=date('Y-m-d');
		$date_achat2 = date('Y-m-d H:i:s');
        $code_client=request('code_client');
		$article_achete=request('article_achete');
        $montant=request('montant');
		$verif = DB::table('users')->where('code_dinvitation', $code_client)->first();
		if ($verif){
					DB::table('achat')->insert(
			[
				'date_achat' => $date_achat,
				'date_achat2' => $date_achat2,
				'code_client' => $code_client,
				'article_achete' => $article_achete,
				'montant' => $montant,
				'users_id' => session('user')->id,
			]
		);
		$lastAchat= DB::table('achat')->get()->last()->id;
		$cm = $montant*0.03;
		$cm2 = $montant*0.02;
			DB::table('commision_client')->insert(
                [
                    'code_client' => $code_client,
                    'achat_id' => $lastAchat,
                    'montant' => $cm,
					'entreprise_id' => session('user')->id,
                ]
            );
			DB::table('commission')->insert(
                [
                    'compte_ent_id' => session('user')->id,
                    'achat_id' => $lastAchat,
                    'montant' => $cm2,
                ]
            );
        return redirect()->route('tb_de_bord')->with('status', 'Publication ajoutée avec succès !');
		} else {
		return redirect()->route('achat')->with('error', 'Code client inconnu !');
    }}
}
