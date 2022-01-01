<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Fiche de demande de projet</title>
  </head>
<style>
.table tr{
	border-bottom:2px solid black;
	font-size:17px;
	padding-bottom:5px;
}
</style>
<body style="background-color:#fff;">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="logo mr-auto" align="left">
			    <img src="{{public_path('assets/img/logo.jpg')}}" style="height:115px;width:265px;">
			</h1>
		</div>
		<br/>
			<h3 class="logo mr-auto ph4" align="right" style="margin-top:-120px;">FICHE DE DEMANDE DE PROJET</h3>
		<div class="container">
		<div class="col-lg-12" style="margin-top:100px;">
			<table style="margin-left:30px;width:650px;" class="table">
				@if($demande->profil =="Entreprise")
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td style="width:165px"><b>RAISON SOCIALE :</b></td><td style="width:150px">{{$demande->raison_sociale}}</td><td style="width:150px"><b>FORME JURIDIQUE :</b></td><td>{{$demande->forme_juridique}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				@endif
				<tr><td style="width:165px"><b>REFERENCE :</b></td><td style="width:150px">{{$demande->reference}}</td><td style="width:150px"><b>EMAIL :</b></td><td>{{$demande->email}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>NOM :</b></td><td>{{$demande->nom_rep}}</td><td><b>TELEPHONE :</b></td><td>{{$demande->telephone}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>ADRESSE :</b></td><td>{{$demande->adresse}}</td><td><b>PROFIL :</b></td><td>{{$demande->profil}}</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>DATE DEMANDE :</b></td><td>{{$demande->dateins}}</td><td><b></b></td><td></td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
				<tr><td><b>PROJET :</b></td><td colspan="3">
				@if ($demande->projet != 0) 
					{{DB::table('projet')->where('id', $demande->projet)->first()->libelle}} 
				@else 
					{{$demande->autre}} 
				@endif
				</td></tr>
				<tr><td colspan="4"><hr style="background-color:gray;"/></td></tr>
			</table>
		</div>
		
		</div>
		
		
	</div>

</body>
</html>