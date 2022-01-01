<li class="drop-down mr-5"><a href="#">Menu</a>
    <ul>
        <li><a href="{{route('achat')}}">Enregistrer un achat</a></li>
        <li><a href="{{route('ajouter-catalogue')}}">Enregistrer une image catalogue</a></li>
        <li><a href="{{route('liste_des_achats')}}">Liste des achats enregistrés</a></li>
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