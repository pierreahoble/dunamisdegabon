<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Illuminate\Http\Request;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\OpenGraph;

class HomeController extends Controller
{
	
	public function be()
    {
		$consultant = DB::table('inscription_consultant')->take(4)->get();
		return view('bureau-d-etude',[
		'consultant' => $consultant,
	]);
    }
    public function bp()
    {
		$projet = DB::table('projet')->orderBydesc('id')->paginate(8);
		$pro = DB::table('projet')->get();
		$typepro = DB::table('type_projet')->get();
		return view('banque-de-projet',[
		'projet' => $projet,
		'pro' => $pro,
		'typepro' => $typepro,
	]);
    }
    
    public function im()
    {
		return view('inscription-mobile');
    }
    public function iom()
    {
		return view('inscription-operateur-mobile');
    }
    public function icm()
    {
		return view('inscription-consultant-mobile');
    }
    public function ipm()
    {
		return view('inscription-partenaire-mobile');
    }
    
    
    
    public function ie()
    {
		$projet=DB::table('projet')->get();
		return view('incubateur-d-entreprise',[
			'projet' => $projet,
		]);
    }
		public function edunamis()
    {
        
		//$pub = DB::table('pub')->orderBydesc('id')->paginate(2);
		$pub2 = DB::table('pub')->take(3)->orderBydesc('id')->get();
		$categories = DB::table('categories')->get();
		return view('e-dunamis',[
		//'pub' => $pub,
		'pub2' => $pub2,
		'categories' => $categories,
	]);
    }
	public function accueil()
    {
        SEOMeta::setTitle('Accueil');
        SEOMeta::setDescription('
        Dunamis Development est une entreprise de soutien et de conseil qui
        accompagne l’ensemble des acteurs du développement économique et social
        du Gabon (privés et publics), en offrant les meilleures prestations pour
        la réussite de leurs projets de bout en bout, de la stratégie à la mise
        en œuvre, en passant par l’appui au financement.
        ');
        SEOMeta::setRobots('index');
        //SEOMeta::addMeta('article:published_time', $post->published_date->toW3CString(), 'property');
        //SEOMeta::addMeta('article:section', $post->category, 'property');
        SEOMeta::addKeyword(['Dunamis', 'développement', 'Gabon']);

        OpenGraph::setDescription('
        Dunamis Development est une entreprise de soutien et de conseil qui
        accompagne l’ensemble des acteurs du développement économique et social
        du Gabon (privés et publics), en offrant les meilleures prestations pour
        la réussite de leurs projets de bout en bout, de la stratégie à la mise
        en œuvre, en passant par l’appui au financement.
        ');
        OpenGraph::setTitle('Accueil');
        OpenGraph::setUrl('https://dunamisdegabon.com');
        OpenGraph::addProperty('type', 'Page d\'accueil');
        OpenGraph::addProperty('locale', 'pt-br');
        OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

        
        OpenGraph::addImage('https://dunamisdegabon.com/img/ap.jpg');
        
        SEOTools::metatags();
        SEOTools::twitter();
        SEOTools::opengraph();
        SEOTools::jsonLd();
        
        SEOTools::setTitle('Dunamis développement Gabon');
        SEOTools::getTitle($session = false);
        SEOTools::setDescription('
        Dunamis Development est une entreprise de soutien et de conseil qui
        accompagne l’ensemble des acteurs du développement économique et social
        du Gabon (privés et publics), en offrant les meilleures prestations pour
        la réussite de leurs projets de bout en bout, de la stratégie à la mise
        en œuvre, en passant par l’appui au financement.
        ');
        SEOTools::setCanonical('https://dunamisdegabon.com');
        SEOTools::addImages('https://dunamisdegabon.com/img/ap.jpg');
        
        Sitemap::create()

    ->add(Url::create('https://dunamisdegabon.com')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1))
    ->add(Url::create('https://dunamisdegabon.com/bureau-d-etude')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1))
    ->add(Url::create('https://dunamisdegabon.com/incubateur-d-entreprise')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1))
    ->add(Url::create('https://dunamisdegabon.com/apropos')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1))
    ->add(Url::create('https://dunamisdegabon.com/e-dunamis')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1))
     ->add(Url::create('https://dunamisdegabon.com/boutique')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1))
     ->add(Url::create('https://dunamisdegabon.com/contact')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1))
     ->add(Url::create('https://dunamisdegabon.com/login')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1))
     ->add(Url::create('https://dunamisdegabon.com/sinscrire')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1))

   ->writeToFile('sitemap.xml');
        
		$consultant = DB::table('inscription_consultant')->count();
		$consultant = $consultant + 10;
		$operateur = DB::table('compte')->where('type', "Entreprise")->count();
		$operateur = $operateur + 10;
		$partenaire = DB::table('inscription_partenaire')->count();
		$partenaire = $partenaire + 10;
		$projet = DB::table('demande_projet')->count();
		$ins1 = DB::table('compte')->where('type', "Client")->count();
		$ins = $ins1 + 200;
		return view('accueil',[
		'consultant' => $consultant,
		'operateur' => $operateur,
		'partenaire' => $partenaire,
		'projet' => $projet,
		'ins' => $ins,
	]);
    }
	public function apropos()
    {
		$pub = DB::table('pub')->orderBydesc('id')->paginate(2);
		$pub2 = DB::table('pub')->take(3)->get();
		$categories = DB::table('categories')->get();
		return view('apropos',[
		'pub' => $pub,
		'pub2' => $pub2,
		'categories' => $categories,
	]);
    }
	
    function verifier (Request $request){

        $email= request("email");

        $verification = DB::table('users')->where('email',$email)->first();

         $iduser = DB::table('users')->where('email',$email)->first()->id;
		 
        if ($verification) {

            return redirect()->route('change_password', ['id' => $iduser ]);
        }
        else{
            return redirect('/forgot_password')->with('error', 'Adresse email invalide');

        }

    }
	public function reinit2()
    {
		return view('reinit');
    }
	function reinit (Request $request){
		$password1= request("password1");
		$password2= request("password2");
		if($password1 == $password2){
             DB::table('users')->where('id', session('user')->id)->update(
                [
                    'password' => $password1,
                ]
            );
            return redirect()->route('tb_de_bord')->with('status', 'Votre mot de passe a été réinitialisé avec succès !');

            return $message;

           }else{
            return redirect()->route('reinit')->with('error', 'Les mots de passe saisis ne sont pas identiques');
           }
        //$email= request("email");
        //$iduser = DB::table('users')->where('id', session('user')->id)->first()->id;
		
    }

    function reset ($id) {

        $oldpassword = md5(request("old"));
        $newpassword = md5(request("new"));
        $confirmpassword= md5(request("confirm"));

        $userpass = session('user')->password;

        if( $oldpassword == $userpass){
           if($newpassword == $confirmpassword){
             DB::table('users')->where('id', $id)->update(
                [
                    'password' => $newpassword,
                ]
             );
             $message = [
                "title" => 'Success',
                "type" => 'success',
                "response" => 'Mot de passe rénitialisé avec succes !',
            ];

            return $message;

           }else{
            $message = [
                "title" => 'Erreur',
                "type" => 'error',
                "response" => 'Confirmation de mot de passe incorrect',
            ];
            return $message;
           }
        }else{
            $message = [
                "title" => 'Erreur',
                "type" => 'error',
                "response" => 'Ancien mot de passe invalide',
            ];
            return $message;
        }

    }

    function Deconnecter() {
        session(['user'=>null]);
        Auth::logout();
        return redirect('/login');
    }

    public function login()
    {
		return view('login');
    }
	
	public function dashbord()
    {
		return view('dashbord');
    }
	public function login2()
    {
		return view('login2');
    }
	public function tableau_de_bord()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
      return view('tableau_de_bord');
    }
	public function tableaudebordconsultant()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
      return view('tableaudebordconsultant');
    }
	public function tableaudebord()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
      return view('tableaudebord');
    }
	public function tb_de_bord()
    {
		if(session('user')== null) {
            return redirect('/login');
        }
      return view('tb_de_bord');
    }
	
    function Connecter (Request $request){
        $email= request("email");
        $password=request("password");
        // $user = DB::table('users')->where('email',$email)->where('password',$password )->first();
        $user = Auth::attempt(['email' => $email, 'password' => $password]);
        if ($user) {
            session(['user' => $user]);
            if(Auth::user()->roles == 'Admin'){
                return redirect('/tableau_de_bord');
            }else if(Auth::user()->roles == 'Entreprise'){
                return redirect('/tb_de_bord');
            } else if(Auth::user()->roles == 'Client'){
				return redirect('/tableaudebord');
			} else {
				return redirect('/tableaudebordconsultant');
			}

        }
        else{
            return redirect('/login')
            ->with('error', 'Adresse email ou mot de passe invalide')
            ->withInput(
              $request->except('password')
            );
        }

    }
}
