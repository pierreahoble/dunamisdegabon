<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Fiche d'inscription</title>
  </head>

<body style="background-color:#fff;">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="logo mr-auto" align="left">
			    <img src="{{asset('assets/img/logo.jpg')}}" style="height:115px;width:265px;">
			</h1>
		</div>
		<br/>
			<h3 class="logo mr-auto ph4" align="right" style="margin-top:-65px;">FICHE OPERATEUR</h3>
		<div class="container">
		<div class="col-lg-12" style="margin-top:80px;">
			<table style="margin-left:30px;width:650px;" class="table">
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td style="width:165px"><b>RAISON SOCIALE :</b></td><td style="width:150px">{{$inscrip->raison_sociale}}</td><td style="width:150px"><b>EMAIL :</b></td><td>{{$inscrip->email}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>REPRÉSENTANT :</b></td><td>{{$inscrip->nom_rep}}</td><td><b>QUARTIER :</b></td><td>{{$inscrip->quartier}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>FORME JURIDIQUE :</b></td><td>{{$inscrip->forme_juridique}}</td><td><b>PROVINCE :</b></td><td>{{$inscrip->province}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>VILLE :</b></td><td>{{$inscrip->ville}}</td><td><b>TÉLÉPHONE :</b></td><td>{{$inscrip->telephone}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>DÉPARTEMENT :</b></td><td colspan="3">{{$inscrip->departement}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>ADRESSE :</b></td><td colspan="3">{{$inscrip->adresse}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>DOMAINE D'ACTIVITÉ :</b></td><td colspan="3">{{$inscrip->domaine}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>DESCRIPTION ACTIVITÉ :</b></td><td colspan="3">{{$inscrip->description}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>DOMAINE DATE INSCRIPT. :</b></td><td colspan="3">{{$inscrip->dateins}}</td></tr>
			</table>
		</div>
		</div>
		
		
	</div>

</body>
</html>