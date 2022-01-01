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
			<h3 class="logo mr-auto ph4" align="center">PROFIL CONSULTANT</h3>
		</div>
		<div class="container">
		<div class="col-lg-12" style="margin-top:250px;">
			<table style="margin-left:-100px;width:650px;" class="table">
				<tr><td style="width:165px"><b>NOM :</b></td><td style="width:150px">{{$inscrip->nom}}</td><td style="width:150px"><b>EMAIL :</b></td><td>{{$inscrip->email}}</td></tr>
				<tr><td><b>DATE DE NAISSANCE :</b></td><td>{{$inscrip->datenais}}</td><td><b>TÉLÉPHONE :</b></td><td>{{$inscrip->telephone}}</td></tr>
				<tr><td><b>ADRESSE :</b></td><td colspan="3">{{$inscrip->adresse}}</td></tr>
				<tr><td><b>NATIONALITÉ :</b></td><td colspan="3">{{$inscrip->nationalite}}</td></tr>
				<tr><td><b>COMPÉTENCES :</b></td><td colspan="3">{{$inscrip->competence}}</td></tr>
				<tr><td><b>LANGUES :</b></td><td colspan="3">{{$inscrip->langue}}</td></tr>
				<tr><td><b>EXPÉRIENCE :</b></td><td colspan="3">{{$inscrip->experience}}</td></tr>
			</table>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="container">
		<h5 align="center">Travaux illustrant les principales compétences</h5>
		<div class="col-lg-12" style="display:block;position:absolute;margin-top:40px;">
			<table style="margin-left:-120px;width:700px;" class="table">
				<tr><td style="width:80px"><b>CLIENT</b></td><td style="width:100px"><b>MISSION</b></td><td style="width:130px"><b>ACTIVITÉ PRINCIPALE</b></td><td style="width:80px"><b>PERTINENTE</b></td><td style="width:10px"><b>DATE/ANNÉE/LIEU</b></td></tr>
				@foreach($travaux as $travau)
				<tr>
				<td>{{$travau->client}}</td>
				<td>{{$travau->mission}}</td>
				<td>{{$travau->activite_principale}}</td>
				<td>{{$travau->pertinente}}</td>
				<td>{{$travau->date_travaux}}/ {{$travau->lieu}}</td>
				@endforeach
				</tr>
				
			</table>
		</div>
		</div>
		</div>
		
	

</body>
</html>