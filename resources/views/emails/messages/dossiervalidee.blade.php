@component('mail::message')
# Bonjour M./Mme {{ $nom }}
 
Ce message c'est pour vous notifier que votre dossier dont la référence est : {{ $reference }}, a été validée. Nous vous prions passer auprès de notre agence pour les dernières formalités. <br>
Merci.<br>
<br>
@endcomponent
