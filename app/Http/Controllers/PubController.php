<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
//use Illuminate\Pagination\Paginator;

class PubController extends Controller
{
    public function voir()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
		$entreprises = DB::table('users')->where('roles', "Entreprise")->get();
		$categories = DB::table('categories')->get();
	return view('nouveau_pub',[
	'entreprises' => $entreprises,
	'categories' => $categories,
	]);
    }
	//Voir une publication
	public function post($id)
    {
		
		$posts = DB::table('pub')->where('id', $id)->first();
		$categories = DB::table('categories')->get();
		$pub2 = DB::table('pub')->take(3)->get();
	return view('post',[
	'post' => $posts,
	'categories' => $categories,
	'pub2' => $pub2,
	]);
    }
	
	public function liste()
    {
		$pub = DB::table('pub')->orderBydesc('id')->paginate(2);
		$pub2 = DB::table('pub')->take(3)->get();
		$categories = DB::table('categories')->get();
		return view('liste_des_pub',[
		'pub' => $pub,
		'pub2' => $pub2,
		'categories' => $categories,
		]);
		}
	
	function enregistrer (Request $request) {

        $date_pub=date('Y-m-d');
		$date2 = date('Y-m-d H:i:s');
        $titre=request('titre');
		$contenu=request('contenu');
        $categories_id=request('categories_id');
		$entreprise_id=request('entreprise_id');
        $image=$request->file('image');

        $name = $image->getClientOriginalName();
		DB::table('pub')->insert(
			[
				'titre' => $titre,
				'contenu' => $contenu,
				'categorie_id' => $categories_id,
				'entreprise_id' => $entreprise_id,
				'date_pub' => $date_pub,
				'date2' => $date2,
				'images' => $image->storeAs('Images', time(). '_'.$name, 'public'),
				'users_id' => session('user')->id,
			]
		);
        return redirect()->route('nouveau_pub')->with('status', 'Publication ajoutée avec succès !');
    }
}
