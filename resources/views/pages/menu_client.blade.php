<li class="drop-down"><a href="#">Menu</a>
    <ul>
        <li class="text-center"><a href="{{route('inscription-operateur')}}">Devenir Operateur</a></li>
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