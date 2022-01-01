<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <title>Fiche d'inscription</title>
  </head>

<body style="background-color:#fff;">
	<div class="row">
		<div class="col-lg-12">
			
		</div>
		<br/>
			<h3 class="logo mr-auto ph4" align="right">Fiche du consultant</h3>
		<div class="container">
		<div class="col-lg-12" style="margin-top:150px;">
			<table style="margin-left:-100px;width:650px;" class="table">
				<tr>
				<td colspan="4"><b>1- Identité</b></td>
				</tr>
				<tr><td style="width:165px"><b>NOM :</b></td><td style="width:150px">{{$inscrip->nom}}</td><td style="width:150px"><b>EMAIL :</b></td><td>{{$inscrip->email}}</td></tr>
				<tr><td><b>DATE DE NAISSANCE :</b></td><td>{{$inscrip->datenais}}</td><td><b>TÉLÉPHONE :</b></td><td>{{$inscrip->telephone}}</td></tr>
				<tr><td><b>ADRESSE :</b></td><td colspan="3">{{$inscrip->adresse}}</td></tr>
				<tr><td><b>NATIONALITÉ :</b></td><td colspan="3">{{DB::table('pays')->where('id', $inscrip->nationalite)->first()->nom}}</td></tr>
			</table>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="container">
		<div class="col-lg-12" style="display:block;position:absolute;">
			<table style="margin-left:-120px;width:700px;" class="table">
				<tr>
				<td colspan="5"><b>2- Travaux illustrant le mieux mes principales compétences</b></td>
				</tr>
				<tr>
				<td style="width:80px"><b>CLIENT</b></td>
				<td style="width:100px"><b>MISSION</b></td>
				<td style="width:130px"><b>ACTIVITÉ PRINCIPALE</b></td>
				<td style="width:80px"><b>PERTINENTE</b></td>
				<td style="width:10px"><b>DATE/ANNÉE/LIEU</b></td>
				</tr>
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
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="col-lg-12" style="display:block;position:absolute;margin-top:40px;">
			<table style="margin-left:-120px;width:700px;" class="table">
				<tr>
				<td colspan="3"><b>3- Langue</b></td>
				</tr>
				<tr>
					<td style="width:80px"><b>N°</b></td>
					<td style="width:80px"><b>Libelle</b></td>
					<td style="width:100px"><b>Niveau</b></td>
					</tr>
				@foreach($langue as $langue)
				<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$langue->libelle}}</td>
				<td>{{$langue->niveau}}</td>
				@endforeach
				</tr>
				
			</table>
		</div>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<div class="col-lg-12" style="display:block;position:absolute;margin-top:40px;">
			<table style="margin-left:-120px;width:700px;" class="table">
				<tr>
				<td colspan="4"><b>4- Compétences</b></td>
				</tr>
				<tr>
					<td style="width:80px"><b>N°</b></td>
					<td style="width:80px"><b>Libelle</b></td>
					<td style="width:100px"><b>Niveau</b></td>
					<td style="width:100px"><b>Diplôme</b></td>
					</tr>
				@foreach($competence as $competence)
				<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$competence->libelle}}</td>
				<td>{{$competence->niveau}}</td>
				<td>{{$competence->diplome}}</td>
				@endforeach
				</tr>
				
			</table>
		</div>
		</div>
		</div>
</body>
</html>