<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/services', function () {
    return view('services');
});
Route::get('/projets', function () {
    return view('projets');
});
Route::get('/sinscrire', function () {
    return view('sinscrire');
});
Route::get('/bureau-d-etude', function () {
    return view('bureau-d-etude');
});
/*Route::get('/incubateur-d-entreprise', function () {
    return view('incubateur-d-entreprise');
});*/
Route::get('/plateforme-affaire','InscriptionController@affaire')->name('plateforme-affaire');
Route::get('/operateur-info/{id}','InscriptionController@operateurid')->name('operateur-info');
Route::get('/incubateur-d-entreprise','HomeController@ie')->name('incubateur-d-entreprise');
Route::get('/bureau-d-etude','HomeController@be')->name('bureau-d-etude');
Route::get('/apropos','HomeController@apropos')->name('apropos');
Route::get('/e-dunamis','HomeController@edunamis')->name('e-dunamis');
Route::get('/banque-de-projet','HomeController@bp')->name('banque-de-projet');
Route::get('/','HomeController@accueil')->name('accueil');



//AUTHENTIFICATION ET DECONNEXION
Route::get('/login','HomeController@login')->name('login');
Route::get('/login2','HomeController@login2')->name('login2');
Route::get('/dashbord','HomeController@dashbord')->name('dashbord');
Route::get('/reinit','HomeController@reinit2')->name('reinit');
Route::post('/reinitPost','HomeController@reinit')->name('reinitPost');
Route::post('/ConnexionPost','HomeController@Connecter')->name('ConnexionPost');
Route::post('/Deconnexion','HomeController@Deconnecter')->name('Deconnexion');

//MOBILE
Route::get('/inscription-mobile','HomeController@im')->name('inscription-mobile');
Route::get('/inscription-operateur-mobile','HomeController@iom')->name('inscription-operateur-mobile');
Route::get('/inscription-consultant-mobile','HomeController@icm')->name('inscription-consultant-mobile');
Route::get('/inscription-partenaire-mobile','HomeController@ipm')->name('inscription-partenaire-mobile');




//TABLEAU DE BORD
Route::get('/tableau_de_bord','HomeController@tableau_de_bord')->name('tableau_de_bord');
Route::get('/tableaudebord','HomeController@tableaudebord')->name('tableaudebord');
Route::get('/tableaudebordconsultant','HomeController@tableaudebordconsultant')->name('tableaudebordconsultant');
Route::get('/tb_de_bord','HomeController@tb_de_bord')->name('tb_de_bord');

//PUBLICATION
Route::get('/nouveau_pub','PubController@voir')->name('nouveau_pub');
Route::post('/pubPost','PubController@enregistrer')->name('pubPost');
Route::get('/boutique','PubController@liste')->name('boutique');
Route::get('/post/{id}','PubController@post')->name('post');

//INSCRIPTION
Route::get('/liste-des-inscriptions','InscriptionController@liste2')->name('liste-des-inscriptions');

Route::get('/inscription','InscriptionController@sinscrire')->name('inscription');
Route::get('/inscription2','InscriptionController@sinscrire2')->name('inscription2');
Route::post('/inscriptionPost','InscriptionController@enregistrer')->name('inscriptionPost');
Route::get('inviter/{users_id}/{code_dinvitation?}','InscriptionController@inviter')->name('inviter');
Route::get('/inscription-operateur','InscriptionController@operateur')->name('inscription-operateur');
Route::post('/opPost','InscriptionController@opPost')->name('opPost');
Route::get('/succes-inscription','InscriptionController@succes')->name('succes-inscription');
Route::get('/fiche-d-inscription','InscriptionController@VoirfichePDF')->name('fiche-d-inscription');
Route::get('/ajouter-photo-operateur','InscriptionController@ajoutphoto')->name('ajouter-photo-operateur');
Route::post('/opphotopost','InscriptionController@photopost')->name('opphotopost');
Route::get('/supimg/{id}','InscriptionController@supimg')->name('supimg');

Route::get('/liste-des-classements','InscriptionController@listeclass')->name('liste-des-classements');
Route::get('/liste-des-operateurs','InscriptionController@liste')->name('liste-des-operateurs');
Route::get('/liste-des-clients','InscriptionController@listeclient')->name('liste-des-clients');
Route::get('/liste-des-consultants','ConsultantController@liste')->name('liste-des-consultants');
Route::get('/liste-des-partenaires','PartenaireController@liste')->name('liste-des-partenaires');

Route::get('/paiement/{id}','InscriptionController@paiement')->name('paiement');
Route::post('/paiement-post/{id}','InscriptionController@paiementpost')->name('paiement-post');
Route::get('/Demandes/{id}','ProjetController@Voirprojet')->name('Demandes');
Route::post('/ValiderdPost','ProjetController@validerdpost')->name('ValiderdPost');
Route::post('/FermerdPost','ProjetController@FermerdPost')->name('FermerdPost');
Route::post('/TraiterdPost','ProjetController@TraiterdPost')->name('TraiterdPost');
Route::get('/fiche-demande-projet/{id}','ProjetController@ficheD')->name('fiche-demande-projet');


/////CONSULTANT
Route::get('/inscription-consultant','ConsultantController@consultant')->name('inscription-consultant');
Route::post('/opcPost','ConsultantController@opcPost')->name('opcPost');
Route::get('/succes-inscription-consultant','ConsultantController@succes')->name('succes-inscription-consultant');
Route::get('/fiche-d-inscription-consultant','ConsultantController@VoirfichePDF')->name('fiche-d-inscription-consultant');
Route::get('/nos-consultants','ConsultantController@noscons')->name('nos-consultants');
Route::get('/ajouter-competence','ConsultantController@ajoutcompetence')->name('ajouter-competence');
Route::get('/ajouter-langue','ConsultantController@ajoutlangue')->name('ajouter-langue');
Route::get('/ajouter-photo','ConsultantController@ajoutphoto')->name('ajouter-photo');
Route::get('/ajouter-travaux','ConsultantController@ajouttravaux')->name('ajouter-travaux');
Route::post('/photopost','ConsultantController@photopost')->name('photopost');
Route::post('/travauxpost','ConsultantController@travauxpost')->name('travauxpost');
Route::post('/languePost','ConsultantController@languePost')->name('languePost');
Route::post('/competencePost','ConsultantController@compost')->name('competencePost');
Route::get('/competencesupPost/{id}','ConsultantController@supprimer')->name('competencesupPost');
Route::get('/languesupPost/{id}','ConsultantController@languesupprimer')->name('languesupPost');
Route::get('/travauxsupprimer/{id}','ConsultantController@travauxsupprimer')->name('travauxsupprimer');
Route::get('/profil/{id}','ConsultantController@profil')->name('profil');

Route::get('/inscription-partenaire','PartenaireController@partenaire')->name('inscription-partenaire');
Route::post('/oppPost','PartenaireController@oppPost')->name('oppPost');
Route::get('/succes-inscription-partenaire','PartenaireController@succes')->name('succes-inscription-partenaire');
Route::get('/fiche-d-inscription-partenaire','PartenaireController@VoirfichePDF')->name('fiche-d-inscription-partenaire');

Route::get('/ficheconsultant/{id}','ConsultantController@Voirfiche2PDF')->name('ficheconsultant');
Route::get('/ficheoperateur/{id}','InscriptionController@Voirfiche2PDF')->name('ficheoperateur');
Route::get('/fichepartenaire/{id}','PartenaireController@Voirfiche2PDF')->name('fichepartenaire');

Route::get('/Operateurs/{id}','InscriptionController@VoirOperateur')->name('Operateurs');
Route::post('/validercompte','InscriptionController@valider')->name('validercompte');

// GESTION DES ACHATS

Route::get('/achat','AchatController@voir')->name('achat');
Route::get('/liste_des_achats','AchatController@liste')->name('liste_des_achats');
Route::post('/achatPost','AchatController@enregistrer')->name('achatPost');

//GESTION DES ENTREPRISES
Route::get('/entreprise','EntrepriseController@voir')->name('entreprise');
Route::get('/liste_des_entreprises','EntrepriseController@liste')->name('liste_des_entreprises');
Route::post('/entreprisePost','EntrepriseController@enregistrer')->name('entreprisePost');
Route::get('/ajouter-catalogue','EntrepriseController@cataloguephoto')->name('ajouter-catalogue');
Route::post('/ajoutcatalogue','EntrepriseController@ajoutcatalogue')->name('ajoutcatalogue');

//Gestion DES CLIENTS
Route::get('/liste_des_clients','EntrepriseController@listecli')->name('liste_des_clients');
Route::get('/abonnement','EntrepriseController@abonnement')->name('abonnement');
Route::post('/abonnementPost','EntrepriseController@abonnementp')->name('abonnementPost');
Route::get('/liste_des_abonnements','EntrepriseController@listeabon')->name('liste_des_abonnements');

// Formulaire de contact

Route::get('/contact', 'ContactController@creer')->name('contact');
Route::post('/contactPost', 'ContactController@store')->name('contactPost');

//DEMANDE DE PROJET
Route::get('/demande-de-projet', 'ProjetController@creer')->name('demande-de-projet');
Route::post('/demPost', 'ProjetController@dem')->name('demPost');

Route::get('/choisir-projet', 'ProjetController@creer2')->name('choisir-projet');
Route::get('/succes-demande', 'ProjetController@succes')->name('succes-demande');
Route::get('/liste_des_demandes','ProjetController@liste')->name('liste_des_demandes');
Route::get('/liste_des_demandes_a_traiter','ProjetController@listeatraiter')->name('liste_des_demandes_a_traiter');
Route::get('/liste_des_demandes_fermees','ProjetController@listeferme')->name('liste_des_demandes_fermees');
Route::get('/liste_des_demandes_validees','ProjetController@listevalidee')->name('liste_des_demandes_validees');
Route::get('/liste_des_demandes_en_cours','ProjetController@listeencours')->name('liste_des_demandes_en_cours');
Route::get('downloadDoc/{pathFile}', 'ProjetController@downloadDoc')->name('downloadDoc');
Route::get('/ajouter_projet', 'ProjetController@voir')->name('ajouter_projet');
Route::post('/ajouterPost', 'ProjetController@ajouterPost')->name('ajouterPost');




#######################################################################################

//Seach 
Route::get('rechercher','ReactController@search')->name('rechercher');


//Envoyer la recherche
Route::post('rechercher_un_projet','ReactController@sendsearch');

//Liste des projets
Route::get('tous_les_projets','ReactController@allprojects');

//Projet de banque
Route::get('projet-de-banque','ReactController@project_banque')->name('projet-de-banque');

//Liste des donnes pour la page 
Route::get('liste_des_donnees','ReactController@all_banque_projet');

//Selectionne une categorie

Route::get('select_type_categorie/{selected}','ReactController@select_categorie');


Route::get('waaa', function () {
    return bcrypt(123);
});

