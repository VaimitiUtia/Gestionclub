<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img
                src="{{asset('img/logoVaa.png')}}"
                alt=""
                height="40" class="d-inline me-3"/>Gestion Club

        </a>
        {{--le bouton qui s'affiche seuelement lorsque tu réduis l'écran pour rendre l'affichage propre et aéré--}}
        <button class="navbar-toggler" type="button" data-bstoggle="collapse" data-bs-target="#navbarNavDropdown"
                ariacontrols="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">

                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page"
                       href="/" style="color:black;">
                        <i class="fa-solid fa fa-home">
                            </i>Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mx-2" href="/apropos" style="color:black;">
                        <i class="fa-solid fa-address-card">
                        </i> À propos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mx-2" href="/contact" style="color: black;">
                        <i class="fa-solid fa-phone">
                        </i> Contact</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#"
                       id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" ariaexpanded="false" style="color: black;">
                        <i class="fa fa-users">
                        </i>Membres</a>

                    <ul class="dropdown-menu" arialabelledby="navbarDropdownMenuLink">
                        @auth

                        @csrf

                            {{--Si l'utilisateur est un admin, un nouvel item s'affiche: le dashboard--}}
                        @if(Auth::user()->admin)
                                {{--Le séparateur entre connexion inscription et Dashboard--}}

                            <di class="divider dropdown-divider"></di>
                            <a href="dashboard" class="dropdown-item">
                                <i class="fa-solid fa-table-columns"></i>
                                Dashboard
                            </a>

                            @endif
                            {{--Sinon, l'utilisateur a le choix entre se connecter et créer un compte--}}

                        @else
                            <li><a class="dropdown-item" href="login">
                                    <i class="fa fa-sign-in"></i> Connexion</a></li>

                            <li><a class="dropdown-item" href="dashboard">
                                    <i class="fa fa-user"></i> Profil</a></li>

                            <li> <a class="dropdown-item" href="#"><i class="fa fa-sliders">
                                    </i>Préférences</a> </li>

                            <div class="dropdown-divider"></div> <!-- Séparateur de liste -->

                            <a class="dropdown-item" href="login">
                                <i class="fa fa-sign-out"></i> Déconnexion</a> <!-- Élément du sous-menu pour la déconnexion -->

                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
