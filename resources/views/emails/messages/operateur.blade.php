@component('mail::message')
# Bonjour M./Mme {{ $nom_rep }}
 
Votre inscription a été validée sur  notre plateforme et un compte espace opérateur vous a été généré. Vous pouvez accéder à votre compte avec les identifiants
suivants :<br>
<b>-Login :</b>  {{ $password }}<br>
<b>-Mot de passe :</b> {{ $email }}<br>

Merci de choisir être des nôtres ! Bonne continuation.,<br>
@endcomponent
