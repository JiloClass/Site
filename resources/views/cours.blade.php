@extends("base")
@section("link")
<link rel="stylesheet" href="{{ asset("css/cours.css") }}">
@endsection
@section("content")
<div class="content">
    <div class="container mb-4">
        <div class="cards">
            @foreach ($cours as $cour)
                <div class="card">
                    <div class="card-content">
                        <div class="card-content-left">
                        <img class="noselect" src="data:image/png;base64, {{ base64_encode($cour->image) }}"/>
                        </div>
                        <div class="card-content-right">
                            <div class="title-img-user">
                                <div class="title-user">
                                    <div class="title">
                                        <h4>{{ $cour->title }}</h4>
                                        <p>de {{ $cour->user->pseudo }}</p>
                                    </div>
                                </div>
                                <i data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-title="Certifié" class="fa-solid fa-circle-check fa-2x" title="Certifié"></i>
                            </div>
                            <p class="desc">{{ Str::limit($cour->description, 40, '...')}}</p>
                            <a class="start-learn" href="cours.php?id={{ $cour->id }}">Apprendre</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{ $cours->links() }}
    </div>
</div>
@endsection
