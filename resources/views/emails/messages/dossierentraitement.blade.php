@component('mail::message')
# Bonjour M./Mme {{ $nom }}
 
Nous vous remercions pour votre demande. Votre dossier est en cours de traitement, nous vous recontacterons pour d'éventuelles formalités. <br>
La référence de votre dossier est : {{ $reference }}<br>
Merci.<br>

Merci de nous faire confiance.,<br>
@endcomponent
