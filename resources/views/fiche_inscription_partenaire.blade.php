<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
  <title>Fiche d'inscription</title>
  </head>

<body style="background-color:#fff;">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="logo mr-auto" align="center"><img src="assets/img/logo.jpg" class="img-fluid"/></h1>
		</div>
		<br/>
		<div class="col-lg-12" style="margin-top:140px;">
			<h3 class="logo mr-auto ph4" align="center">FORMULAIRE D'ENREGISTREMENT PARTENARE</h3>
		</div>
		<div class="container">
		<div class="col-lg-12" style="margin-top:250px;">
			<table style="margin-left:-100px;width:650px;" class="table">
				<tr><td style="width:165px"><b>RAISON SOCIALE :</b></td><td style="width:150px">{{$inscrip->raison_sociale}}</td><td style="width:150px"><b>EMAIL :</b></td><td>{{$inscrip->email}}</td></tr>
				<tr><td><b>REPRÉSENTANT :</b></td><td>{{$inscrip->nom_rep}}</td><td><b>QUARTIER :</b></td><td>{{$inscrip->quartier}}</td></tr>
				<tr><td><b>FORME JURIDIQUE :</b></td><td>{{$inscrip->forme_juridique}}</td><td><b>PROVINCE :</b></td><td>{{$inscrip->province}}</td></tr>
				<tr><td><b>VILLE :</b></td><td>{{$inscrip->ville}}</td><td><b>TÉLÉPHONE :</b></td><td>{{$inscrip->telephone}}</td></tr>
				<tr><td><b>DÉPARTEMENT :</b></td><td colspan="3">{{$inscrip->departement}}</td></tr>
				<tr><td><b>ADRESSE :</b></td><td colspan="3">{{$inscrip->adresse}}</td></tr>
				<tr><td colspan="2"><b>DOMAINE(S) DE PARTENARIAT CHOISI(S) :</b></td><td colspan="2">{{$inscrip->domaine}}</td></tr>
				@if ($inscrip->struc_orga_details != "")
				<tr><td colspan="2"><b>DÉTAIL STRUCTURATION ET ORGANISATION :</b></td><td colspan="2">{{$inscrip->struc_orga_details}}</td></tr>
				@endif
				@if ($inscrip->etud_concep_details != "")
				<tr><td colspan="2"><b>DÉTAIL ETUDE ET CONCEPTION   :</b></td><td colspan="2">{{$inscrip->etud_concep_details}}</td></tr>
				@endif
				@if ($inscrip->mobi_ress_details != "")
				<tr><td colspan="2"><b>DÉTAIL MOBILISATION DES RESSOURCES  :</b></td><td colspan="2">{{$inscrip->mobi_ress_details}}</td></tr>
				@endif
				@if ($inscrip->rea_pro_details != "")
				<tr><td colspan="2"><b>DÉTAIL REALISATION DES PROJETS   :</b></td><td colspan="2">{{$inscrip->rea_pro_details}}</td></tr>
				@endif
			</table>
		</div>
		
		<div class="col-lg-12" style="display:block;position:relative;margin-top:150px;margin-left:-80px;">
		Fait  à  <b>{{$inscrip->ville}}</b>, le {{$inscrip->dateins}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature
		</div>
		<div class="col-lg-12" style="display:block;position:relative;margin-top:20px;margin-left:300px;width:100px;height:100px;">
		@if ($inscrip->nom_fichier != "")
		<img src="{{asset("storage/".$inscrip->fichier)}}" alt="" class="img-fluid"/>
		@endif
		</div>
		</div>
		
		
	</div>

</body>
</html>