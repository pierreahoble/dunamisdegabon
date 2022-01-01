<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReactController extends Controller
{
    public function search()
    {
        $operateur=[];
        return view('pages.recherche',[
            'operateur'=>$operateur
        ]);
    }


    //all projects

    public function allprojects()
    {
        $data = [];
        $operateur_recent = DB::table('inscription_operateur')->take(3)->get();
       $operateur = DB::table('inscription_operateur')->orderBydesc('id')->paginate(3);
       $data['operateur'] = $operateur;
       $data['operateur_recent'] = $operateur_recent;

       return $data;
    }


    public function sendsearch(REQUEST $request)
    {
        $seachword = $request['seachword'];
        return $operateur = DB::table('inscription_operateur')
                                ->where('description','like','%'.$seachword.'%')
                                ->get();
    }






    public function project_banque()
    {
        return view('pages.projet_banque');
    }

    public function all_banque_projet()
    {
        $data = [];
        $projet = DB::table('projet')->orderBydesc('id')->paginate(8);
		$pro = DB::table('projet')->get();
		$typeprojet = DB::table('type_projet')->get();
        
        $data['projet'] = $projet;
        $data['pro'] = $pro;
        $data['typeprojet'] = $typeprojet;

        return $data;

    }


    public function select_categorie($selected)
    {
       return $projet = DB::table('projet')
                            ->where('typepro',$selected)
                            ->orderBydesc('id')->paginate(6);
    }








}
