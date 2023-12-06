@extends("base")

@section("title", "JiloClass | Accueil")

@section("content")
<header>
    <div class="title">
        <h1 class="noselect font-bold">Venez apprendre avec <span>JiloClass</span></h1>
        <p>Et la particularité de JiloClass et que tous le monde peut faire apprendre aux autres</p>
    </div>
  </header>
  <div class="content">
    <div class="container" style="max-width: 100%;background: var(--light-gray);">
      <h1 class="card-move-limit">Les 3 "P", nos PRIORITÉES</h1>
      <div class="cards card-move-limit">
        <div class="card">
          <i class="fa-solid fa-graduation-cap fa-4x"></i>
          <p class="noselect">Parfait pour apprendre en + des études</p>
        </div>
        <div class="card">
          <i class="fa-solid fa-share fa-4x"></i>
          <p class="noselect">Partager votre savoir et vos études afin d’aider des personnes dans leurs besoins </p>
        </div>
        <div class="card">
          <i class="fa-solid fa-circle-check fa-4x"></i>
          <p class="noselect">Pour créer des cours facilement</p>
        </div>
      </div>
    </div>
    <div class="container container-display noselect" style="padding: 150px 0px 45px;">
      <h1>À quoi sert JiloClass ?</h1>
      <div class="cards cards-view">
        <div class="card-view">
          <img src="{{ asset("img/science.png") }}">
          <h3 class="noselect">Avec JiloClass vous pouvez apprendre la science, La SVT, La physique chimie</h3>
        </div>
        <div class="card-view card-view-reverse">
          <img src="{{ asset("img/code.png") }}">
          <h3 class="noselect">Mais aussi le code, par exemple HTML, CSS ou PHP, mais aussi Ruby, Perle, C++, C#</h3>
        </div>
      </div>
    </div>
    <div class="container">
        <h1>Nos Cours</h1>
        <div class="cards">
            @foreach ($cours as $cour)
                <div class="card">
                    <div class="card-content">
                        <div class="title-img-user">
                            <img style="border: 1px solid var(--secondary);border-radius: 250px;" width="40px" height="40px" class="noselect" alt="Mon Profil" src="data:image/png;base64, {{ base64_encode($cour->user->image) }}"/>
                            <div class="title">
                                <h4>{{ $cour->title }}</h4>
                                <p>{{ $cour->user->pseudo }}</p>
                            </div>
                            <iconify-icon class="icon-certified" icon="mingcute:certificate-fill" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Certifié"></iconify-icon>
                        </div>
                    <p>{{ Str::limit($cour->description, 40, '...')}}</p>
                    </div>
                    <a class="start-learn" href="cours.php?id={{ $cour->id }}">Apprendre</a>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container container-display container-infos">
    <svg class="waves waves-top" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="var(--wave-color-4)" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="var(--wave-color-3)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="var(--wave-color-2)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="var(--wave-color)" />
        </g>
    </svg>
    <div class="cards">
      <div class="card-content-info noselect">
        <h3><?= $count_user ?></h3>
        <h2>Utilisateurs</h2>
      </div>
      <div class="card-content-info noselect">
        <h3><?= $count_apprentices ?></h3>
        <h2>Apprentis</h2>
      </div>
      <div class="card-content-info noselect">
        <h3><?= $count_cours ?></h3>
        <h2>Cours</h2>
      </div>
      <div class="card-content-info noselect">
        <h3>{{ $count_creator }}</h3>
        <h2>Créateurs</h2>
      </div>
    </div>
    <svg class="waves waves-bottom" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
    <use xlink:href="#gentle-wave" x="48" y="0" fill="var(--wave-color-4)" />
    <use xlink:href="#gentle-wave" x="48" y="3" fill="var(--wave-color-3)" />
    <use xlink:href="#gentle-wave" x="48" y="5" fill="var(--wave-color-2)" />
    <use xlink:href="#gentle-wave" x="48" y="7" fill="var(--wave-color)" />
    </g>
    </svg>
    </div>
    <div class="container" id="partner" style="display: none;">
      <h1>Nos Partenaires</h1>
      <div class="cards">
        <div class="card">
        </div>
      </div>
    </div>
  </div>
<script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>

@endsection
