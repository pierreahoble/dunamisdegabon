@component('mail::message')
# Bonjour M./Mme {{ $nom }}
 
Ce message c'est pour vous notifier que votre dossier dont la référence est : {{ $reference }}, a été fermée du fait de n'avoir pas complèté les formalités pour finaliser votre dossier. <br>
Merci.<br>
<br>
@endcomponent
