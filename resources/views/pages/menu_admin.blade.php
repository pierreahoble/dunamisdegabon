<li class="drop-down"><a href="#">Menu</a>
    <ul>
        <li><a href="{{route('liste-des-inscriptions')}}">Liste des inscriptions</a></li>
        <li><a href="{{route('liste_des_demandes')}}">Liste des demandes</a></li>
        <li><a href="{{route('nouveau_pub')}}">Enregistrer une pub</a></li>
        <li><a href="{{route('entreprise')}}">Enregistrer une Entreprise</a></li>
        <li><a href="{{route('abonnement')}}">Enregistrer un abonnement</a></li>
        <li><a href="{{route('nouveau_pub')}}">Toutes les pub</a></li>
        <li><a href="{{route('liste_des_entreprises')}}">Liste des entreprises</a></li>
        <li><a href="{{route('liste_des_clients')}}">Liste des clients</a></li>
        <li><a href="{{route('liste_des_abonnements')}}">Clients abonnés</a></li>
        <li><a href="{{route('ajouter_projet')}}">Nouveau projet</a></li>
        <li><a href="{{route('reinit')}}">Réinitialiser mon mot de passe</a></li>
        <li>
            <form method="post" action="{{route('Deconnexion')}}">
                {{csrf_field()}}
                <button class="btn btn-default" type="submit"
                    style="margin-left:10px;font-size:14px;font-weight:700;width:100%;">
                    Déconnexion
                </button>
            </form>
        <li>
    </ul>
</li>