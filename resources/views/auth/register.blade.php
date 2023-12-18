@extends("base")

@section("title", "JiloClass | Connexion")

@section("head")
    <link rel="stylesheet" href="{{ asset("css/signup.css") }}">
@endsection

@section("content")
    <div class="container-signup">
        <div class="modal-wrapper">
            <div class="modal-top-bar"></div>
            <div class="modal-container">
                <a style="margin-bottom: 5px;text-decoration: none;" href="index"><i class="fa-solid fa-arrow-left"></i>Retourner à l'accueil</a>
                <h4>Inscription</h4>
                <form method="post" enctype="multipart/form-data">
                    <div class="container mb-2">
                        <div class="row">
                            <h5>Informations personnelles</h5>
                            @csrf
                            <div class="col">
                                <label for="InputPseudo" class="label-required">Pseudo</label>
                                <input type="text" class="form-control" name="pseudo" placeholder="JiloClass2.0" id="InputPseudo" required>
                            </div>
                            <div class="col">
                                <label for="InputEmail" class="label-required">Addresse Email</label>
                                <input type="email" class="form-control" name="email" id="InputEmail" placeholder="exemple@exemple.com" required>
                            </div>
                        </div>
                        <div class="col">
                            <label for="InputDiscord">Discord</label>
                            <input type="text" class="form-control" name="discord" id="InputDiscord" placeholder="Exemple#1234">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row mb-2">
                            <h5>Sécurité du Compte</h5>
                            <div class="col">
                                <label for="InputMdp" class="label-required">Mot de Passe</label>
                                <input type="password" class="form-control" name="mdp" id="InputMdp" required>
                            </div>
                            <div class="col">
                                <label for="InputMdpC" class="label-required">Confirmation du Mot de Passe</label>
                                <input type="password" class="form-control" name="mdpc" id="InputMdpC" required>
                            </div>
                        </div>
                        <button type="submit" name="formsignup" class="btn btn-primary"><i class="fa-solid fa-arrow-right-to-bracket"></i> S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
